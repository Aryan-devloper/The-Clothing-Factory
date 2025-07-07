



<!DOCTYPE html>
<html lang="en">
    <head>
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

        <!--circal img-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

          <!-- Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">





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
  <link rel="icon" type="image/png" href="{{asset('img/logo.png')}}">
  <title>Document</title>
    <style>



.circle-img {
      width: 200px;
      height: 150px;
      object-fit: cover;
      margin-right: 15px;
    }

    @media (max-width: 576px) {
      .circle-img {
        width: 70px;
        height: 70px;
        margin-right: 10px;
      }
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


        /* Correct CSS selector to target the 'alert alert-danger' class */
        .alert.alert-danger {
            background-color: rgba(15, 15, 15, 0.8); /* Setting background color to red */
            color: rgb(239, 239, 246);
        }

        /* Add the zoom animation effect */
        .card {
            transition: transform 0.1s ease, box-shadow 2.3s ease; /* Smooth hover effect */
            opacity: 0; /* Initially hide the card */
            animation: fadeIn 0.6s forwards; /* Apply fade-in animation */
        }

        /* Fade-in animation */
        @keyframes fadeIn {
            0% {
                opacity: 0;
                transform: translateY(20px); /* Move the card slightly below */
            }
            100% {
                opacity: 1;
                transform: translateY(0); /* Card reaches its normal position */
            }
        }

        /* Hover effect for the cards */
        .card:hover {
            transform: scale(1.05); /* Scales the card up by 5% */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5); /* Adds a subtle shadow for better effect */
        }

        /* Adding animation delay to stagger the appearance of cards */
        .col-12.col-md-6.col-lg-3:nth-child(1) .card {
            animation-delay: 0.1s;
        }
        .col-12.col-md-6.col-lg-3:nth-child(2) .card {
            animation-delay: 0.2s;
        }
        .col-12.col-md-6.col-lg-3:nth-child(3) .card {
            animation-delay: 0.3s;
        }
        .col-12.col-md-6.col-lg-3:nth-child(4) .card {
            animation-delay: 0.4s;
        }

        /* CSS for horizontal scrolling of video cards */
        .video-scroll-container {
            display: flex;
            overflow-x: auto;
            gap: 15px; /* Adds space between video cards */
            padding: 15px;
        }

        .video-scroll-container .card {
            flex: 0 0 auto; /* Ensures cards don't shrink or grow */
            width: 250px; /* Adjust width for video cards */
        }

        /* Optional: Hide scrollbar for better appearance */
        .video-scroll-container::-webkit-scrollbar {
            display: none;
        }
        .video-scroll-container {
            -ms-overflow-style: none;  /* Internet Explorer 10+ */
            scrollbar-width: none;  /* Firefox */
        }

               /* Fade-in animation for images */
               .poster-image {
            opacity: 0;
            animation: fadeInImage 1s forwards; /* Apply fade-in animation for images */
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

        
        

        footer .app-links a {
            color: #fff;
            font-size: 16px;
            margin: 0 15px;
            text-decoration: none;
        }

        footer .app-links a:hover {
            color: #f1f1f1;
        }

        /* Image fade-in animation */
        @keyframes fadeInImage {
            0% {
                opacity: 0;
                transform: scale(0.9); /* Slightly shrink the image */
            }
            100% {
                opacity: 1;
                transform: scale(1); /* Image reaches its original size */
            }
        }
        .card .btn {
            background-color:rgba(7, 13, 24, 0.27); /* Unique button color */
            color: black;
            border-radius: 50px;
            padding: 10px 20px;
            font-size: 16px;
            font-weight: bold;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card .btn:hover {
            background-color:rgba(19, 40, 79, 0.53); /* Slightly darker shade on hover */
            transform: translateY(-5px); /* Button lifts up on hover */
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); /* Shadow effect on hover */
        }
        
    </style>
</head>
<body>
    <!-- Alert box with Bootstrap class for danger alert -->
    <div class="alert alert-danger" role="alert">
        <center>Use code: XMAS25 | Get Flat 25% off | Xmas SALE is now Live!</center>
    </div>

   
    
    <center>
    <img src="{{asset('img/the.webp')}}" class="card-img-top" alt="..." style="width: 20%; height: auto;">
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

    

    </body>