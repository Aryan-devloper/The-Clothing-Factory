<!-- resources/views/admin/layouts/master.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <h2>Admin Panel</h2>
    </header>

    <main>
        @yield('content') <!-- This will be replaced by child views -->
    </main>

    <footer>
        <p>&copy; 2024 Admin Panel</p>
    </footer>
</body>
</html>
