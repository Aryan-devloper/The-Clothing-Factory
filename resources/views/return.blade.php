<!DOCTYPE html>
<html lang="en">
<head>
    <link href="./bootstrap-5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    
    <title>Document</title>

    <style>
        /* Existing Styles */


        
.profile-container {
            position: relative;
            display: inline-block;
        }

        /* Hidden by default, buttons will appear on hover */
        .profile-buttons {
            display: none;
            position: absolute;
            top: 100%;
            left: 50%;
            transform: translateX(-50%);
            background-color: #343a40;
            border-radius: 5px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            z-index: 10;
        }

        /* Show buttons on hover */
        .profile-container:hover .profile-buttons {
            display: block;
        }

        /* Style for the buttons */
        .profile-buttons a {
            color: #fff;
            font-size: 16px;
            padding: 8px 12px;
            text-decoration: none;
            display: block;
        }

        .profile-buttons a:hover {
            background-color: #f1f1f1;
            color: #000;
        }

      /* Zoomed-in class for the image */
.zoomed-in {
    position: fixed; /* Fixed to the screen */
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%) scale(15); /* Increase scale for bigger zoom */
    z-index: 1000; /* Ensures the image is on top */
    width: auto; /* Auto width to maintain aspect ratio */
    height: 90%; /* Adjust height for larger image */
    cursor: zoom-out; /* Change cursor to indicate zoom-out action */
    transition: transform 0.3s ease, width 0.3s ease, height 0.3s ease;
}

/* Optional: Add a background overlay to darken the screen when zoomed in */
.zoom-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Dark background */
    z-index: 999; /* Overlay on top of the content */
    display: none; /* Initially hidden */
}


        .alert.alert-danger {
            background-color: rgba(15, 15, 15, 0.8); 
            color: rgb(239, 239, 246);
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

        footer .map-container iframe {
            width: 100%;
            height: 300px;
            border: none;
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

        /* Form Styling */
        form {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        form label {
            font-weight: 600;
            margin-bottom: 8px;
            display: block;
        }

        form input, form textarea, form select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 14px;
        }

        form input:focus, form textarea:focus, form select:focus {
            border-color: #0056b3;
            outline: none;
        }

        form button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            font-size: 16px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
        }

        form button:hover {
            background-color: #0056b3;
        }

        .error {
            color: red;
            font-size: 12px;
        }

        /* Center the image */
        .card-img-top {
            display: block;
            margin: 0 auto;
            max-width: 20%;
        }
        .form-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
            color: #333;
        }
    </style>
</head>
<body>
    <div class="alert alert-danger" role="alert">
        <center>Use code: XMAS25 | Get Flat 25% off | Xmas SALE is now Live!</center>
    </div>

    <center>
        <img src="./img/the.webp" class="card-img-top" alt="..." />
    </center>
    <br>

   
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

<BR>
    <!-- Return Request Form -->
    <form action="{{ route('return.submit') }}" method="POST">

        @csrf

        
        <div class="form-title">
            <h2>Return/Exchange Request Form</h2>
        </div>
        <div>
            <label for="customer_name">Your Name:</label>
            <input type="text" id="customer_name" name="customer_name" value="{{ auth()->user()->name ?? '' }}" required>
            @error('customer_name') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="order_number">Order Number:</label>
            <input type="text" id="order_number" name="order_number" required>
            @error('order_number') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="email">Email Address:</label>
            <input type="email" id="email" name="email" value="{{ auth()->user()->email ?? '' }}" required>
            @error('email') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="product_name">Product Name:</label>
            <input type="text" id="product_name" name="product_name" value="{{ old('product_name') }}" required>
            @error('product_name') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="reason">Reason for Return/Exchange (optional):</label>
            <textarea id="reason" name="reason">{{ old('reason') }}</textarea>
            @error('reason') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="request_type">Request Type:</label>
            <select id="request_type" name="request_type" required>
                <option value="return" {{ old('request_type') == 'return' ? 'selected' : '' }}>Return</option>
                <option value="exchange" {{ old('request_type') == 'exchange' ? 'selected' : '' }}>Exchange</option>
            </select>
            @error('request_type') <div class="error">{{ $message }}</div> @enderror
        </div>

        <div>
            <label for="details">Additional Details (optional):</label>
            <textarea id="details" name="details">{{ old('details') }}</textarea>
            @error('details') <div class="error">{{ $message }}</div> @enderror
        </div>

        <button type="submit">Submit Request</button>
    </form>

  <!-- Footer -->
  <footer class="text-center text-lg-start text-white" style="background-color: #000;">
        <div class="container p-4 pb-0">
            <!-- Section: Links -->
            <section class="">
                <!--Grid row-->
                <div class="row">
                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-3 font-weight-bold">
                             Company name
                        </h6>
                        <p>
                            <img src="./img/logo.png" alt="Clothing Factory Image" style="width: 250px; height: auto;">
                        </p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p><a class="text-white" href="#">Official Merchandise</a></p>
                        <p><a class="text-white" href="#">Women</a></p>
                        <p><a class="text-white" href="#">Men</a></p>
                        <p><a class="text-white" href="#">Celebrity</a></p>
                        <p><a class="text-white" href="#">Last Chance Up to 75% OFF</a></p>
                        <p><a class="text-white" href="#">Returns & Exchanges</a></p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                        <p><a class="text-white" href="#">Your Account</a></p>
                        <p><a class="text-white" href="#">Shop Instagram</a></p>
                        <p><a class="text-white" href="#">About Us</a></p>
                        <p><a class="text-white" href="#">Contact Us</a></p>
                        <p><a class="text-white" href="#">Terms</a></p>
                        <p><a class="text-white" href="#">Help</a></p>
                    </div>

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                        <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                </div>
            </section>

            <hr>
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
                © 2023 Copyright:
                <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
        </div>

        <center>
                <div class="container p-4 pb-0">
                    <!-- Section: Social media -->
                    <section class="mb-4">
                        <!-- Facebook -->
                        <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/thclothingfactorystore" role="button"><i class="fab fa-facebook-f"></i></a>

                        <!-- Twitter -->
                        <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.twitter.com" role="button"><i class="fab fa-twitter"></i></a>

                        <!-- Google -->
                        <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com" role="button"><i class="fab fa-google"></i></a>

                        <!-- Instagram -->
                        <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/the_clothingfactory/" role="button"><i class="fab fa-instagram"></i></a>

                        <!-- Linkedin -->
                        <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/channel/UCX6u_M_vRhKWJY4N0rSH8dg" role="button"><i class="fab fa-youtube"></i></a>

                        <!-- Github -->
                        <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.github.com" role="button"><i class="fab fa-github"></i></a>
                    </section>
                    <!-- Section: Social media -->
                </div>
            </center>

            <section style="background-color: black; margin: 0; padding: 0;">
    <div class="container-fluid" style="padding: 0;">
        <h4 class="text-center mt-4 text-white" style="font-family: serif;">Find The Clothing Factory:</h4>
        <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723192.246375139!2d71.60887965732206!3d23.022505527018197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84ee19e63a6b%3A0x41116ac5ad508703!2sAhmedabad%2C%20Gujarat%2C%20India!5e0!3m2!1sen!2sus!4v1674829458500!5m2!1sen!2sus" 
            width="100%" 
            height="400" 
            style="border:0; display: block;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade">
        </iframe>
    </div>
</section>
    </footer>

    <!-- Bootstrap JS and Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Library JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybA6a4n6u3lbhFqFzJgypfveYLjl5jGM5lFf4gbzLpk1ytT4el" crossorigin="anonymous"></script>
</html>
