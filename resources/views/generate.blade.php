<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container mt-4">
    <form method="GET" action="{{ route('generate') }}">
        <div class="mb-3">
            <label for="order_id" class="form-label">Enter Order ID</label>
            <input type="text" class="form-control" id="order_id" name="order_id" required>
        </div>
        <button type="submit" class="btn btn-primary">Generate Bill</button>
    </form>
</div>

</body>
</html>