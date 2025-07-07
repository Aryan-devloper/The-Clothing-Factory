<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
     
    
     public function showForm()
     {
        return view('contactus');
     }
 
     public function view_contact()
     {
         $contact = Contact::all(); // Fetch all users
     
         return view('admin.view_contactus', compact('contact'));
     }
     
     
     public function submitForm(Request $request)
     {
         
        
         $request->validate([
             'fullname' => 'required|max:255',
             'email' => 'required|email',
             'contact' => 'required|numeric',
             'message' => 'required',
         ]);
 
         Contact::create([
            'fullname' => $request->fullname,
            'email' => $request->email,
            'contact' => $request->contact,
            'message' => $request->message,  

        ]);
 
         
        
         return redirect('/homepage')->with('success', 'Your message has been sent successfully!');
    }
}
