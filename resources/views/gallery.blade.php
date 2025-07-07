
@include('header')

<br>
   <center> <h1>All Products</h1></center><br>
    <form class="d-flex ms-auto" id="search-form">
                        <input class="form-control me-2" type="search" id="search-bar" placeholder="Search items" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form><br>
                    <div class="container">
    <div class="row" id="product-list">
        @foreach($products as $product)
        <div class="col-md-3 mb-4 product-card" data-aos="fade-up" data-name="{{ strtolower($product->name) }}">
            <div class="card">
                <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
                    <p class="card-text"><strong>Size:</strong> {{ $product->size }}</p>
                    <p class="card-text"><strong>Color:</strong> {{ $product->color }}</p>

                    <!-- Form starts here -->
                    <form action="{{ route('shopping.create', $product->id) }}" method="GET">
                        <button type="submit" class="btn btn-primary">Shopnow</button>
                    </form>
                    <!-- Form ends here -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


    <!-- Footer -->
    <footer class="text-center text-lg-start text-white" style="background-color: #000;">
        <div class="container p-4 pb-0">
            <section class="text-center">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-3 font-weight-bold">Company name</h6>
                        <p><img src="./img/logo.png" alt="Clothing Factory Image" style="width: 250px; height: auto;"></p>
                    </div>
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p><a class="text-white" href="#">Official Merchandise</a></p>
                        <p><a class="text-white" href="#">Women</a></p>
                        <p><a class="text-white" href="#">Men</a></p>
                        <p><a class="text-white" href="#">Celebrity</a></p>
                        <p><a class="text-white" href="#">Last Chance Up to 75% OFF</a></p>
                        <p><a class="text-white" href="#">Returns & Exchanges</a></p>
                    </div>
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                        <p><a class="text-white" href="#">Your Account</a></p>
                        <p><a class="text-white" href="#">Shop Instagram</a></p>
                        <p><a class="text-white" href="#">About Us</a></p>
                        <p><a class="text-white" href="#">Contact Us</a></p>
                        <p><a class="text-white" href="#">Terms</a></p>
                        <p><a class="text-white" href="#">Help</a></p>
                    </div>
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
                © 2023 Copyright: <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
            </div>
        </div>
        <center>
            <div class="container p-4 pb-0">
                <section class="mb-4">
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/thclothingfactorystore" role="button"><i class="fab fa-facebook-f"></i></a>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.twitter.com" role="button"><i class="fab fa-twitter"></i></a>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com" role="button"><i class="fab fa-google"></i></a>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.instagram.com/the_clothingfactory/" role="button"><i class="fab fa-instagram"></i></a>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.youtube.com/channel/UCX6u_M_vRhKWJY4N0rSH8dg" role="button"><i class="fab fa-youtube"></i></a>
                    <a data-mdb-ripple-init class="btn btn-outline-light btn-floating m-1" href="https://www.github.com" role="button"><i class="fab fa-github"></i></a>
                </section>
            </div>
        </center>
        <section style="background-color: black; margin: 0; padding: 0;">
            <div class="container-fluid" style="padding: 0;">
                <h4 class="text-center mt-4 text-white" style="font-family: serif;">Find The Clothing Factory:</h4>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3723192.246375139!2d71.60887965732206!3d23.022505527018197!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e84ee19e63a6b%3A0x41116ac5ad508703!2sAhmedabad%2C%20Gujarat%2C%20India!5e0!3m2!1sen!2sus!4v1674829458500!5m2!1sen!2sus" width="100%" height="400" style="border:0; display: block;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </footer>

    <!-- Bootstrap JS and Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- AOS Library JS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init();

        // Search functionality
        document.getElementById('search-form').addEventListener('submit', function (e) {
            e.preventDefault();
            var searchTerm = document.getElementById('search-bar').value.toLowerCase();
            var productCards = document.querySelectorAll('.product-card');

            productCards.forEach(function(card) {
                var productName = card.getAttribute('data-name');
                if (productName.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        });
    </script>
</body>

</html>
