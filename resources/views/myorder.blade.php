@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">🛒 My Cart</h2>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if($cartItems->isEmpty())
            <div class="text-center text-muted">
                <p>😕 Your cart is empty.</p>
                <a href="{{ url('/') }}" class="btn btn-primary mt-3">🛍️ Continue Shopping</a>
            </div>
        @else
            <table class="table table-bordered table-hover">
                <thead class="table-dark">
                    <tr>
                        <th>🧾 Order ID</th>
                        <th>📦 Product</th>
                        <th>📐 Size</th>
                        <th>🔢 Qty</th>
                        <th>📅 Date</th>
                        <th>📝 Description</th>
                        <th>🗑️ Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($cartItems as $item)
                    <tr>
                        <td>{{ $item->order_id }}</td>
                        <td>{{ $item->product_name }}</td>
                        <td>{{ $item->size }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>{{ $item->date }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Remove item from cart?')">❌ Remove</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="text-end">
                <a href="{{ url('/checkout') }}" class="btn btn-success">💳 Proceed to Checkout</a>
            </div>
        @endif
    </div>
</div>
@endsection
