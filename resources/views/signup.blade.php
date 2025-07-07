<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to external CSS and Bootstrap -->
    <link href="./1.css" rel="stylesheet">
    <link href="./bootstrap-5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS Library CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

     <!-- Font Awesome -->
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    
    <title>Signup</title>
    
    <style>
        .alert.alert-danger {
            background-color: rgba(24, 23, 23, 0.797); /* Setting background color to red */
            color: rgb(239, 239, 246);
        }

        /* Basic Reset */
        body, h1, form, div {
            margin: 0;
            padding: 0;
        }
        
        h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
        }

        .container {
            max-width: 500px; /* Adjust container width */
            background-color: #fff;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-size: 1rem;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            padding: 8px;
            margin-bottom: 15px; /* Reduced margin to make form compact */
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
            width: 100%;
        }

        input[type="password"] {
            width: 100%;
        }

        input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        /* Button Styling */
        button {
            background-color: #4CAF50;
            color: white;
            font-size: 1.1rem;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
            width: 100%; /* Make button full width */
        }

        button:hover {
            background-color: #45a049;
            transform: scale(1.05); /* Slight scale effect on hover */
        }

        button:active {
            background-color: #388e3c;
            transform: scale(1);
        }

        .error-messages {
            background-color: #f8d7da;
            color: #721c24;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        /* Navbar adjustments for responsiveness */
        .navbar-nav {
            display: flex;
            flex-direction: column;
        }

        /* Navbar link adjustments */
        .navbar-nav .nav-link {
            text-align: center;
        }

        /* Making the page fully responsive */
        @media (max-width: 576px) {
            .container {
                padding: 15px;
            }

            .alert.alert-danger {
                font-size: 14px;
            }

            h1 {
                font-size: 22px;
            }
        }
        .logo-container {
      padding-right: 200px;
  }
  footer {
            background-color: #343a40;
            color: #fff;
            text-align: center;
        }

        footer .social-links a {
            color: #fff;
            margin: 0 10px;
            font-size: 24px;
            text-decoration: none;
        }

        footer .social-links a:hover {
            color: #f1f1f1;
        }

        footer .map-container {
            margin-top: 20px;
        }
        footer .app-links a {
            color: #fff;
            font-size: 16px;
            margin: 0 15px;
            text-decoration: none;
        }

        footer .app-links a:hover {
            color: #f1f1f1;
        }
    </style>
</head>
<body>

<div class="alert alert-danger" role="alert">
    <center>Use code: XMAS25 | Get Flat 25% off | Xmas SALE is now Live!</center>
</div>

<center>
    <img src="./img/the.webp" class="card-img-top" alt="..." style="width: 20%; height: auto;">
</center>

<hr>

<center>
        <nav class="navbar navbar-expand-lg bg-body-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href=".\homepage">Official Merchandise</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href=".\woman">Woman</a></li>
                        <li class="nav-item"><a class="nav-link active" href=".\men">Men</a></li>
                        <li class="nav-item"><a class="nav-link active" href=".\insta">Shop Instagram</a></li>
                        <li class="nav-item"><a class="nav-link active" href=".\gallery" aria-disabled="true">Gallery</a></li>
                        <li class="nav-item"><a class="nav-link active" href=".\women" aria-disabled="true">Last Chance Up to 75% OFF</a></li>
                        <li class="nav-item"><a class="nav-link active" href=".\return" aria-disabled="true">Returns & Exchanges</a></li>
                        <li class="nav-item"><a class="nav-link active" href=".\about" aria-disabled="true">About Us</a></li>
                        <li class="nav-item"><a class="nav-link active" href=".\contactus" aria-disabled="true">Contact Us</a></li>
                    </ul>
                </div>

                <div class="navbar-text">
                    <!-- Profile Image with hover buttons -->
                    <div class="profile-container">
                        @if(session('customer_image'))
                            <img id="zoomImage" src="{{ Session::get('customer_image') }}" alt="Profile Image" style="width: 40px; height: 40px; border-radius: 50%; margin-left: 10px; cursor: pointer;">
                        @else
                            <img id="zoomImage" src="{{ asset('default-avatar.png') }}" alt="Default Avatar" style="width: 50px; height: 50px; border-radius: 50%; margin-left: 10px; cursor: pointer;">
                        @endif

                        <!-- Hidden buttons that appear on hover -->
                        <div class="profile-buttons">
                            @if(Auth::check())
                                <a href="{{ url('/logout') }}">Logout</a>
                                <a href="{{ route('edit', ['id' => Auth::id()]) }}" class="dropdown-item">Edit Profile</a>
                            @else
                                <!-- You can add links for non-logged-in users if necessary -->
                            @endif
                        </div>
                    </div>

                    @if(Auth::check())
                        <span>Welcome The Cloth Factory<b> {{ Session::get('customer_name') }}<b></span>
                    @endif
                </div>
            </div>
        </nav>
    </center>

    <!-- Zoom overlay that will darken the background -->
    <div id="zoomOverlay" class="zoom-overlay"></div>

    <script>
        // Function to handle zoom-in and zoom-out effect on image click
        const zoomImage = document.getElementById('zoomImage');
        const zoomOverlay = document.getElementById('zoomOverlay');

        zoomImage.addEventListener('click', function() {
            // Add zoomed-in class to image
            zoomImage.classList.toggle('zoomed-in');
            // Toggle overlay visibility
            zoomOverlay.style.display = zoomImage.classList.contains('zoomed-in') ? 'block' : 'none';
        });

        // Close the zoom effect when the overlay is clicked
        zoomOverlay.addEventListener('click', function() {
            zoomImage.classList.remove('zoomed-in');
            zoomOverlay.style.display = 'none';
        });
    </script>

<br>

<div class="container">
    <h1>Signup</h1>

    <!-- Show validation errors -->
    @if($errors->any())
        <div class="error-messages">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('signup.submit') }}" method="POST" enctype="multipart/form-data"> <!-- Added enctype -->
        @csrf
        <div>
            <label for="name">Name:</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" required>
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" required>
        </div>

        <div>
            <label for="mobail">Mobile:</label>
            <input type="text" name="mobail" id="mobail" value="{{ old('mobail') }}" required>
        </div>

        <div>
            <label for="city">City:</label>
            <input type="text" name="city" id="city" value="{{ old('city') }}" required>
        </div>

        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>
        </div>
        
        <div>
            <label for="password_confirmation">Confirm Password:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
        </div>

        <!-- Image Upload Field -->
        <div>
            <label for="image">Profile Image:</label>
            <input type="file" name="image" id="image"> <!-- Added image upload input -->
        </div>

        <button type="submit">Sign Up</button>

        <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
    </form>
</div>




<!-- Add Font Awesome for social media icons -->
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybA6a4n6u3lbhFqFzJgypfveYLjl5jGM5lFf4gbzLpk1ytT4el" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
<script>
    AOS.init(); // Initialize AOS animations
</script>

</body>
</html>
