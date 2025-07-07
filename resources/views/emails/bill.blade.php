<!DOCTYPE html>
<html>
<head>
    <title>Invoice</title>
</head>
<body>
    <h2>{{ $details['title'] }}</h2>
    <p>Bill Code: <strong>{{ $details['billCode'] }}</strong></p>
    <p>Product: {{ $details['product']->product_name }}</p>
    <p>Quantity: {{ $details['product']->quantity }}</p>
    <p>Price: ${{ $details['product']->quantity * 20 }}</p> <!-- Example Price Calculation -->
    <p>Thank you for your purchase!</p>
</body>
</html>
