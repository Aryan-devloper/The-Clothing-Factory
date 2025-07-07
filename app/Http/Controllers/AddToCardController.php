<?php

namespace App\Http\Controllers;

use App\Models\AddToCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AddToCardController extends Controller
{
    public function index()
    {
        $cartItems = AddToCard::where('user_id', Auth::id())->get();
        return view('myorder', compact('cartItems'));
    }   

    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required',
            'product_name' => 'required',
            'size' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'date' => 'required|date',
            'quantity' => 'required|integer|min:1',
        ]);

        AddToCard::create([
            'user_id' => Auth::id(),
            'order_id' => $request->order_id,
            'product_name' => $request->product_name,
            'size' => $request->size,
            'email' => $request->email,
            'phone' => $request->phone,
            'date' => $request->date,
            'quantity' => $request->quantity,
            'description' => $request->description,
        ]);

        return redirect()->back()->with('success', 'Item added to cart!');
    }

    public function destroy($id)
    {
        AddToCard::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Item removed!');
    }

    

    

}


