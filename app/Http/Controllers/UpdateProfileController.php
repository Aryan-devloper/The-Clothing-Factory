<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;


class UpdateProfileController extends Controller
{
    // Show Edit Profile Form
    public function edit($id)
    {
        // Find the user by ID
        $user = User::findOrFail($id);

        // Check if the authenticated user matches the ID
        if (Auth::id() !== $user->id) {
            return redirect()->route('homepage')->with('error', 'You are not authorized to edit this profile.');
        }

        // Return the edit view with the user
        return view('edit', compact('user'));
    }

    // Handle Profile Update
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email,' . $id,
            //'phone' => 'required|numeric',
            'password' => 'nullable|min:4',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp'
        ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
       // $user->phone = $request->phone;

        // Update password if provided
        if ($request->password) {
            $user->password = Hash::make($request->password);
        }

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($user->image) {
                // Ensure the path is correct
                Storage::delete('public/images/' . $user->image); // Delete old image file
            }

            if ($request->hasFile('image')) {
    
                $filename = $request->file('image');   
                
                $extension = $filename->getClientOriginalExtension();
                $newFilename = time() . '.' . $extension;
                $filename->move('images', $newFilename);
                $uimg = 'images/' . $newFilename;
                $user->image =$uimg; 
            }
        }

        // Save the updated user profile
        $user->save();

        Session::forget('customer_login');
        Session::forget('customer_name');
        Session::forget('customer_image');

        Session::put('customer_login',true);
        Session::put('customer_name',$user->name);
        Session::put('customer_image',$user->image);

        return redirect()->route('homepage')->with('status', 'Profile updated successfully!');
    }
}
