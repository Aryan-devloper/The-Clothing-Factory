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
    <link
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        rel="stylesheet" />
    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
        rel="stylesheet" />



    <title>Document</title>
    <style>
        .alert.alert-danger {
            background-color: rgba(15, 15, 15, 0.8);
            /* Setting background color to red */
            color: rgb(239, 239, 246);
        }

        /* Custom styling for video element */
        .video-container {
            
            /* Added margin-top to create space above the video */
            margin-bottom: 40px;
            /* Added bottom margin for space below the video */
            text-align: center;
        }

        video {
            max-width: 100%;
            /* Ensure the video fits within the container */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* About Us Section */
        .about-us {
            text-align: center;
            margin-top: 30px;
            margin-bottom: 40px;
            /* Added bottom margin for space below the section */
        }

        .about-us h4 {
            font-family: serif;
            font-weight: bold;
        }

        .about-us h1 {
            font-family: serif;
            font-weight: bold;
        }

        .about-us p {
            font-size: 1rem;
            /* Reduced font size */
            line-height: 1.6;
        }

        /* Container for the image and text */
        .image-text-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            padding: 10px;
            /* Reduced padding */
            background-color: black;
            /* Removed the background image */
            color: black;
            /* Text color */
            border-radius: 8px;
            /* Optional: Rounded corners for the background */
            margin-right: 10px;
            margin-left: 10px;
            color: aliceblue
        }

        .image-text-container .text-content {
            max-width: 55%;
            /* Slightly adjusted to make the text take a bit more space */
            padding: 10px;
            /* Reduced padding for text */
        }

        .image-text-container .text-content p {
            font-size: 0.9rem;
            /* Reduced font size */
            line-height: 1.6;
        }

        .image-text-container img {
            max-width: 25%;
            /* Reduced image size */
            border-radius: 10px;
            margin-left: 20px;
            /* Adjusted margin */
        }

        /* Ensure the second image appears on the right */
        .image-text-container.reverse img {
            order: 1;
            /* Move the image to the right */
        }

        .image-text-container.reverse .text-content {
            order: 0;
            /* Keep the text on the left */
        }

        /* AOS animation */
        [data-aos="fade-left"] {
            animation-duration: 1s;
        }

        [data-aos="fade-right"] {
            animation-duration: 1s;
        }

        /* Scrolling effect */
        .scroll-container {
            margin-top: 40px;
            padding: 10px;
        }

        /* New Container for 4 images with text (1 row) */
        .image-text-row {
            display: flex;
            justify-content: space-between;
            gap: 10px;
            /* Space between items */
            margin-top: 40px;
        }

        .image-text-row .image-text-container {
            flex: 1;
            min-width: 20%;
            /* Ensure each container takes up the same width */
        }


        /* Resize specific image (ab5.png) */
        .image-text-row img[src*="ab5.png"] {
            width: 20%;
            /* Or specify a value like width: 200px */
            height: 28%;
            /* Maintain aspect ratio */
            max-height: 200px;
            /* Adjust size */
        }

        /* Footer styles */
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

        .image-wrapper {
            position: relative;
            width: 20%;
            height: auto;
        }

        .image-wrapper img {
            width: 100%;
            height: auto;
            display: block;
        }

        .image-wrapper::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(255, 255, 255, 0.7);
            /* White overlay with opacity */
            pointer-events: none;
        }
             .logo-container {
      padding-right: 200px;
  }

  
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


    </style>

    </style>
</head>

<body>

   <!-- Alert box with Bootstrap class for danger alert -->
   <div class="alert alert-danger" role="alert">
        <center>Use code: XMAS25 | Get Flat 25% off | Xmas SALE is now Live!</center>
    </div>

   
    
    <center>
    <img src="./img/the.webp" class="card-img-top" alt="..." style="width: 20%; height: auto;">
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

    <!-- Video Section -->
    <div class="video-container">
        <video autoplay muted loop controls>
            <source src="./video/about.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
    <br>

    <!-- About Us Section -->
    <center>
        <div class="about-us container" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <h4><b>About Us</b></h4>
            <h1><b>Welcome to “The Clothing Factory”</b></h1>
            <p> We are a team of artisans, craftsmen, and homemakers dedicated to supplying you with the best quality clothing wear.</p>
            <p>From cutting, stitching, embroidery, sewing on buttons, and trimming clothes; we do it all. Our backbone is our labor force who have their own tales of love for what they do. Our passion stems from their aspirations and hopes for a better future.</p>
            <p>Follow us on our Instagram page to get an insight into how your clothes are made, and get the latest updates!</p>
            <p>The Clothing Factory is an online Fashion Retail Outlet. It belongs to Cacti Designs Pvt Ltd.</p>
        </div>
    </center>

    <!-- Image and Text Sections with Scroll Animations -->
    <div class="scroll-container" data-aos="fade-right">
        <div class="image-text-container" data-aos="fade-up" data-aos-anchor-placement="bottom-center">
            <img src="./img/ab1.webp" alt="Clothing Factory Image">
            <div class="text-content" data-aos="fade-left">
                <h6 style="font-family: serif;">Meet our Craftsmen</h6>
                <h2 style="font-family: serif;">Shakeel, Master</h2>
                <p>Meet Shakeel Master, the architect of your clothes. His father had a stitching shop in his village from where he picked up an interest in garments. He came into the factory knowing just how to cut and stitch garments. With a deep interest in patterns, he took upon himself this task of making patterns on his own. Today, with over 25 years of experience in this industry, he is a self-taught and exceptional pattern maker who can produce a pattern by just looking at the style. Everybody in the factory lovingly calls him “Master ji”, a title well deserved!</p>
                <p>This is us acknowledging and respecting the contribution of all the pattern makers working in different factories across the world. We are indeed lucky to have Shakeel Master ji as part of our team!❤</p>
            </div>
        </div>

        <div class="image-text-container reverse" data-aos="fade-right">
            <img src="./img/ab2.webp" alt="Clothing Factory Image">
            <div class="text-content" data-aos="fade-up" data-aos-anchor-placement="bottom-center">
                <h6>Meet our Craftsmen</h6>
                <h2>Raj-Rani, Worker</h2>
                <p>Meet Raj-Rani, one of our many women workers at the factory. She cuts loose threads in the garments, sews buttons, fixes elastics, creates laces and tassels, and ensures that all your clothes are thoroughly checked before they are ready for dispatch.</p>
                <p>We would like to take a time out to acknowledge and respect the contribution of all the women garment workers like her working in different factories across the world. They not only support their families but also make sure that the quality of the clothes that you wear are nothing less than perfect.</p>
                <p>We are indeed lucky to have Raj-Rani as part of our team!</p>
            </div>
        </div>
    </div>

    <!-- Image and Text Row (4 Images in One Row) -->
    <center>
        <div class="image-text-row" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
            <!-- Image and Text Section 1 -->
            <div data-aos="fade-up-right" data-aos-anchor-placement="bottom-center">
                <img src="./img/ab3.webp" alt="Clothing Factory Image">
                <div class="text-content">
                    <p><b>Promoting local Artisans & Craftsmen</b><br>We are impacting
                        lives of daily<br> wage workers while making the fashion business’s invisible workforce visible.</p>


                </div>
            </div>

            <!-- Image and Text Section 2 -->
            <div data-aos="fade-up-right" data-aos-anchor-placement="bottom-center">
                <img src="./img/ab4.webp" alt="Clothing Factory Image">
                <div class="text-content">
                    <p><b>Hand Crafted</b><br>All products are skilfully hand made<br> inside the factory andgo through a number<br> of quality checks before gettingready for dispatch.</p>


                </div>
            </div>

            <!-- Image and Text Section 3 -->
            <div data-aos="fade-up-right" data-aos-anchor-placement="bottom-center">
                <img src="./img/ab6.webp" alt="Clothing Factory Image">
                <div class="text-content">
                    <p><b>25 Years of Industry Experience</b><br>
                        We use our experience to produce best quality clothing.</p>


                </div>
            </div>

            <!-- Image and Text Section 4 -->
            <div data-aos="fade-up-right " data-aos-anchor-placement="bottom-center">
                <img src="./img/ab5.png" alt="Clothing Factory Image">
                <div class="text-content">
                    <p><b>Zero Waste</b><br>We are constantly in the quest for finding<br> creative ways of utilizing leftover<br> stock to reduce waste and save our environment.



                </div>
            </div>
        </div>
    </center>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz4fnFO9gybA6a4n6u3lbhFqFzJgypfveYLjl5jGM5lFf4gbzLpk1ytT4el" crossorigin="anonymous"></script>
   
    


    <!-- AOS Library JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>

</html>