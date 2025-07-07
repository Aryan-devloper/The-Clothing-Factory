<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clothing Factory</title>
    <!-- Include Bootstrap CSS or any other global CSS here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Other CSS files (if any) -->
    @yield('styles') <!-- Allow additional styles to be included in views -->
</head>
<body>
    <header>
        <!-- This is where you can include your site's header/navigation -->
    
        

    <main class="py-4">
        @yield('content') <!-- This is where the content of the individual views will be inserted -->
    </main>

  
    
    <!-- Include Bootstrap JS and other global JS here -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @yield('scripts') <!-- Allow additional scripts to be included in views -->
</body>
</html>


