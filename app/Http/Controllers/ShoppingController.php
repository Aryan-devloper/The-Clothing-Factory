<?php

namespace App\Http\Controllers;

use App\Models\Shopping;
use App\Models\Product;
use Illuminate\Http\Request;

class ShoppingController extends Controller
{
    public function create(Request $request)
    {
       $pro=Product::where('id',$request->id)->first(); 
        return view('shopping',compact('pro')); // Load the form view
    }

    public function view_shopping()
    {
        $products = Shopping::all();
        return view('admin.view_shopping', compact('products'));
    }
    

    public function store(Request $request)
    {
        // Validate the incoming request
        $request->validate([
            'product_name' => 'required|string|max:255',
            'size' => 'required|string|max:50',
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'date' => 'required|date',
            'quantity' => 'required|integer|min:1',
            'description' => 'nullable|string',
            'price' => 'required'
        ]);
        
       
            
        
        $order_id = strtoupper(chr(rand(65, 90))) . str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        
        

        Shopping::create([
            'order_id' => $order_id,
            'product_name' => $request->product_name,
            'size' => $request->size,
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'price' => $request->price
        ]);

        return redirect('/homepage')->with('success', 'Order placed successfully with Order ID: ' . $order_id);
    }

    

    
}
