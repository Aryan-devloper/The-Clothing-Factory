<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Invoice - Order #{{ $products->first()->order_id }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #f2f2f2;
        }

        .invoice-box {
            max-width: 950px;
            margin: 30px auto;
           
            padding-right:30px;
            background-color: #ffffff;
            border: 1px solid #dee2e6;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        h2, h3 {
            margin-bottom: 20px;
            color: #343a40;
        }

        .table thead th {
            background-color: #e9ecef;
            border-color: #dee2e6;
            color: #495057;
        }

        .table td, .table th {
            border: 1px solid #dee2e6;
            padding: 12px;
            vertical-align: middle;
            text-align: center;
        }

        .footer {
            margin-top: 40px;
            text-align: center;
            font-size: 13px;
            color: #6c757d;
        }

        .email-cell {
            max-width: 220px;
            word-break: break-word;
            white-space: normal;
        }
    </style>
</head>
<body>

    <div class="invoice-box">
        <h2 class="text-center">🛍️ The Clothing Factory</h2>
        <h3>Hello {{ $products->name }},</h3>
        <p>😊Thank you for shopping with us! Please find your Shopping Bill attached below.</p>
        <p>📌 If you have any questions, feel free to contact   us anytime.</p>

        <h4 class="mt-4">🧾 Shopping Details</h4>
        <h5 class="text-center mb-4">Order ID: #{{ $products->first()->order_id }}</h5>

        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Order ID</th>
                        <th>Product Name</th>
                        <th>Size</th>
                        <th>Customer Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Date</th>
                        <th>Quantity</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $products->order_id }}</td>
                        <td>{{ $products->name }}</td>
                        <td>{{ $products->size }}</td>
                        <td>{{ $products->name }}</td>
                        <td class="email-cell">{{ $products->email }}</td>
                        <td>{{ $products->phone }}</td>
                        <td>{{ $products->date }}</td>
                        <td>{{ $products->quantity }}</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <h5 class="text-end mt-4">🧺 Total Items: {{ $products->quantity }}</h5>

        <div class="footer">
            &copy; {{ date('Y') }} The Clothing Factory — All rights reserved.
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
