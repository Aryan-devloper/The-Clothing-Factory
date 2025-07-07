<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;



class AuthController extends Controller
{
    public function showSignupForm()
    {
        return view('signup');
    }

    public function view_user()
{
    $users = User::all(); // Fetch all users

    return view('admin.view_user', compact('users'));
}

    public function signup(Request $request)
    {
        
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'mobail' => 'nullable|numeric|digits_between:10,15',
            'city' => 'required|string|max:255',
            'password' => 'required|string|min:2|confirmed',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);
    
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
    
        $imagePath = null; // Initialize imagePath as null in case no image is uploaded
        
        // Check if the user has uploaded an image
        if ($request->hasFile('image')) {
            $filename = $request->file('image');
            $extension = $filename->getClientOriginalExtension();
            $newFilename = time() . '.' . $extension;
            $filename->move(public_path('images'), $newFilename);  // Save file to public/images folder
            $imagePath = 'images/' . $newFilename;  // Save the relative path of the image
        }
    
        // Create the user
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobail' => $request->mobail,
            'city' => $request->city,
            'password' => Hash::make($request->password),
            'image' => $imagePath, // Store the image path
        ]);
    
        return redirect('/homepage')->with('success', 'Registration successful. You can now log in.');
    }
    

    public function showLoginForm()
    {
        return view('login');
    }


    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password))
        {
            Session::put('customer_login',true);
            Session::put('customer_name',$user->name);
            Session::put('customer_image',$user->image);

            Auth::login($user);
            return redirect()->intended('/homepage')->with('status', 'Login successful');
        }

        
        
        return back()->withErrors(['email' => 'Invalid email or password'])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        Session::forget('customer_login');
        Session::forget('customer_name');
        Session::forget('customer_image');
        
        return redirect('login')->with('status', '');
    }
    public function show()
    {
        $rec = User::get();

        return view('/view',compact('rec'));
    }

    

public function homepage()
{
    
    if (Auth::check()) {
        
        $username = Auth::user()->name;
    } else {
        
        return redirect()->route('login');
    }

    
    return view('homepage', compact('username'));
}
public function about()
{

    if (Auth::check()) {
        $username = Auth::user()->name;
    } else {
    
        return redirect()->route('login');
    }
    return view('about', compact('username'));
}


public function contact()
{

    if (Auth::check()) {
        $username = Auth::user()->name;
    } else {
        return redirect()->route('login');
    }

    
    return view('contact', compact('username'));
}
public function insta()
{
    
    if (Auth::check()) {
       
        $username = Auth::user()->name;
    } else {
       
        return redirect()->route('login');
    }

   
    return view('insta', compact('username'));
}
public function men()
{
   
    if (Auth::check()) {
       
        $username = Auth::user()->name;
    } else {
      
        return redirect()->route('login');
    }

   
    return view('men', compact('username'));
}

public function return()
{
    
    if (Auth::check()) {
        
        $username = Auth::user()->name;
    } else {
       
        return redirect()->route('login');
    }

    
    return view('return', compact('username'));
}
}