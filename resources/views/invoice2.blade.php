<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice</title>
    <style>
        body { font-family: DejaVu Sans, sans-serif; }
        h2 { text-align: center; }
        table { width: 100%; margin-top: 20px; border-collapse: collapse; }
        td, th { border: 1px solid #000; padding: 8px; }
    </style>
</head>
<body>
    <h2>Order Invoice</h2>
    <p><strong>Name:</strong> {{ $order->name }}</p>
    <p><strong>Email:</strong> {{ $order->email }}</p>
    <p><strong>Phone:</strong> {{ $order->phone }}</p>
    <p><strong>Date:</strong> {{ $order->date }}</p>

    <table>
        <tr>
            <th>Product</th>
            <th>Size</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        <tr>
            <td>{{ $order->product_name }}</td>
            <td>{{ $order->size }}</td>
            <td>{{ $order->quantity }}</td>
            <td>{{ $order->price }}</td>
        </tr>
    </table>

    <p><strong>Description:</strong> {{ $order->description }}</p>
</body>
</html>
