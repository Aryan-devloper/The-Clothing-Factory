<?php

namespace App\Http\Controllers;
use App\Models\ReturnExchange;


use Illuminate\Http\Request;

class ReturnExchangeController extends Controller
{
    public function showForm()
    {
        return view('return');
    }
    public function view_return()
    {
        $return = ReturnExchange::all(); // Fetch all users
    
        return view('admin.view_return', compact('return'));
    }
    public function submitForm(Request $request)
    {
        $validated = $request->validate([
            'customer_name' => 'required|string|max:255',
            'order_number' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'product_name' => 'required|string|max:255',
            'reason' => 'nullable|string|max:500',
            'request_type' => 'required|in:return,exchange',
            'details' => 'nullable|string',
        ]);
       ReturnExchange::create([
        'customer_name' => $request->customer_name,
        'order_number' => $request->order_number,
        'email' => $request->email,
        'product_name' => $request->product_name,  
        'reason' => $request->reason,  
        'request_type' => $request->request_type,  
        'details' => $request->details,
    ]);
        return redirect('/homepage')->with('success', 'Your return/exchange request has been submitted.');
    }
}
