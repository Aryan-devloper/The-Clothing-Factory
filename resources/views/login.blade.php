<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Link to external CSS and Bootstrap -->
    <link href="./1.css" rel="stylesheet">
    <link href="./bootstrap-5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- AOS Library CSS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

         <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <title>Cloth Factory - Login</title>
    <style>
        /* Custom Styling */
        .alert.alert-danger {
            background-color: rgba(24, 23, 23, 0.797); /* Setting background color to red */
            color: rgb(239, 239, 246);
        }

        /* Centering the login form and styling */
        .login-container {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: #f9f9f9;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .login-container label {
            font-size: 14px;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }

        .login-container input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 14px;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .login-container button:hover {
            background-color: #0056b3;
        }

        /* Footer styles */
        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .footer h5 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        .footer p {
            font-size: 16px;
        }

        .footer a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .footer a:hover {
            text-decoration: underline;
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
    <br>
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
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href=".\woman">Women</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href=".\men">Men</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href=".\insta">Shop Instagram</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="" aria-disabled="true">Celebrity</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="" aria-disabled="true">Last Chance Up to 75% OFF</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href=".\return" aria-disabled="true">Returns & Exchanges</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href=".\about" aria-disabled="true">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href=".\contactus" aria-disabled="true">Contact Us</a>
            </li>
          </ul>
        </div>
        
          <a class="nav-link active" href=".\signup">Sing Up</a>
        <hr>
        
      </div>
    </nav>
    
    </center>

    <!-- Login Form -->
    <div class="login-container">
        <h2>Login</h2>

        <!-- Display error message if login fails -->
        @if(session('error'))
            <div style="color: red;">
                {{ session('error') }}
            </div>
        @endif

        <!-- Login Form -->
        <form action="{{ url('/login') }}" method="POST">
            @csrf

            <label for="email">Email:</label>
            <input type="email" name="email" id="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" id="password" required>

            <button type="submit">Login</button>
        </form>
    </div>

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
        AOS.init(); // Initialize AOS animations
    </script>

    <!-- Add Font Awesome for social media icons -->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

      <!-- AOS Library JS -->
      <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    

</body>
</html>
