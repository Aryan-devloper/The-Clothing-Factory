<?php
namespace App\Http\Controllers;

use App\Models\AdminUser;
use App\Models\User;
use App\Models\Shopping;
use App\Models\Contact;
use App\Models\ReturnExchange;




use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMail;





class AdminUserController extends Controller
{
    // Show the form to create a new admin user
    public function create()
    {
        return view('admin.authentication-register');
    }
    
    
    
    // Store the new admin user
    public function store(Request $request)
{
    // Validate incoming data
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|unique:adminusers,email',
        'password' => 'required|string|min:4',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $imagePath = null;

    // Check if the user has uploaded an image
    if ($request->hasFile('image')) {   
        $filename = $request->file('image');
        $extension = $filename->getClientOriginalExtension();
        $newFilename = time() . '.' . $extension;
        $filename->move(public_path('images'), $newFilename); // Save to public/images
        $imagePath = 'images/' . $newFilename; // Store relative path
    }

    // Create the new admin user
    AdminUser::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => md5($request->password), // Consider using Hash::make instead
        'image' => $imagePath, // Fixed line
    ]);

    return redirect('authentication-login')->with('success', 'Admin user created successfully!');
}

    

    // Show all admin users (Optional)
    public function index()
    {
        $adminUsers = AdminUser::all();
        return view('authentication-register', compact('adminUsers'));  // Fixed the variable name
    }


    public function showadLoginForm()
    {
        return view('admin.authentication-login');
    }

    
    public function adlogin(Request $request)
{
    
    $user1 = AdminUser::where('email', $request->email)->first();

    if (!$user1) {
        return back()->withErrors(['email' => 'User not found'])->withInput();
    }
    

    if ($user1->email == $request->email) {
        Session::put('admin_login', true);
        Session::put('admin_name', $user1->name);
        Session::put('admin_email', $user1->email);
        Session::put('admin_image', $user1->image);

        Auth::login($user1);

        
        return redirect()->route('admin.product_add')->with('status', 'Login successful');
    }

    
}
public function logout(Request $request)
{
    Auth::logout();
    Session::forget('admin_login');
    Session::forget('admin_name');
    Session::forget('admin_email');
    Session::forget('admin_image');

    return redirect('admin/authentication-login')->with('status', 'You have been logged out.');
}

    public function show()
    {
        $rec = User::get();

        return view('/view',compact('rec'));
    }

    

    public function viewProfile()
{
    $admin = AdminUser::first(); // Or fetch from DB if needed
    return view('admin.view_profile', compact('admin'));
}

public function editProfile()
{
    $admin = AdminUser::first(); // or fetch from DB
    return view('admin.edit_profile', compact('admin'));
}

public function updateProfile(Request $request)
{
    $admin = AdminUser::first();  

    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
    ]);

    $admin->name = $request->name;
    $admin->email = $request->email;
    $admin->password = $request->password;

   
    
    if ($request->hasFile('image')) {
        
        
        if ($admin->image) {
           
            
            Storage::delete('public/images/' . $admin->image); 
            
        }

        if ($request->hasFile('image')) {

            $filename = $request->file('image');   
            
            $extension = $filename->getClientOriginalExtension();
            $newFilename = time() . '.' . $extension;
            $filename->move('images', $newFilename);
            $uimg = 'images/' . $newFilename;
            $admin->image =$uimg; 
        }

    }
    $admin->save();

    Session::forget('admin_login');
    Session::forget('admin_name');
    Session::forget('admin_email');
    Session::forget('admin_image');

    Session::put('admin_login',true);
    Session::put('admin_name',$admin->name);
    Session::put('admin_email',$admin->email);
    Session::put('admin_image',$admin->image);

    return redirect()->route('admin.deshbord')->with('success', 'Profile updated successfully.');
}


public function dashboard()
{
    
    $u_count=User::count();
    $c_count=Contact::count();
    $r_count=ReturnExchange::count();
    $ad_count=AdminUser::count();
    $salesData = Shopping::selectRaw('DATE(created_at) as date, sum(quantity) as sale_count')
    ->groupBy(Shopping::raw('DATE(created_at)'))  
    ->orderBy('date', 'asc')
    ->get();
    
    $dates = $salesData->pluck('date');
    $sales = $salesData->pluck('sale_count');


    $revenueData = Shopping::selectRaw('DATE(created_at) as date, sum(price) as r_price')
    ->groupBy(Shopping::raw('DATE(created_at)'))  
    
    ->orderBy('date', 'asc')
    ->get();

    $r_dates =  $revenueData->pluck('date');
    $r_price =  $revenueData->pluck('r_price');

    return view('admin.deshbord', compact('u_count','sales','dates','r_dates','r_price','c_count','r_count','ad_count'));


}

}


