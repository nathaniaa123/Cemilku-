<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset("css/homepage.css")}}">
</head>


<body>
    {{--Carousel Banner--}}
    <section id="banner" class="d-flex justify-content-center align-items-center"style="padding-top: 70px;">
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="3" aria-label="Slide 4"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="4" aria-label="Slide 5"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="5" aria-label="Slide 6"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="6" aria-label="Slide 7"></button>
                <button type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="7" aria-label="Slide 8"></button>
            </div>

            <div class="carousel-inner">

                <div class="carousel-item active">
                <img src="{{ asset('images/Banner1.png')}}" class="d-block w-100 img-fluid" alt="First-Slide">
                </div>


                <div class="carousel-item">
                <img src="{{ asset('images/Banner2.png')}}" class="d-block w-100 img-fluid" alt="Second Slide">
                </div>

                <div class="carousel-item">
                <img src="{{ asset('images/Banner3.png')}}" class="d-block w-100 img-fluid" alt="Third Slide">
                </div>

                <div class="carousel-item">
                <img src="{{ asset('images/Banner4.png')}}" class="d-block w-100 img-fluid" alt="Fourth Slide">
                </div>

                <div class="carousel-item">
                <img src="{{ asset('images/Banner5.png')}}" class="d-block w-100 img-fluid" alt="Fifth Slide">
                </div>

                <div class="carousel-item">
                <img src="{{ asset('images/Banner6.png')}}" class="d-block w-100 img-fluid" alt="Sixth Slide">
                </div>

                <div class="carousel-item">
                <img src="{{ asset('images/Banner7.png')}}" class="d-block w-100 img-fluid" alt="Seventh Slide">
                </div>

                <div class="carousel-item">
                <img src="{{ asset('images/Banner8.png')}}" class="d-block w-100 img-fluid" alt="Eighth Slide">
                </div>

            </div>
        </div>
    </section>


<!-- Trending-->
<section class="container col-4">
    <div class="product-card-left d-flex justify-content-center align-items-center">
        <div class="product-image">
            <img src="{{ asset('images/Group17.png') }}">
        </div>
        <div class="product-info-right top-10 start-50 translate-middle ps-5">
            <p class="product-category">snack tower</p>
            <h3 class="product-title">Anniv Delight</h3>
            <p class="product-price product-price-1">Rp 200.000</p>
        </div>
    </div>

    <div class="product-card-right d-flex justify-content-center align-items-center">
        <div class="product-info-left top-10 end-45 translate-middle ps-5">
            <p class="product-category">snack bouquet</p>
            <h3 class="product-title">Fest Celebration</h3>
            <p class="product-price product-price-2">Rp 100.000</p>
        </div>
        <div class="product-image">
            <img src="{{ asset('images/Group18bener.png')}}">
        </div>
    </div>

    <div class="product-card-left d-flex justify-content-center align-items-center">
        <div class="product-image">
            <img src="{{ asset('images/Group19.png') }}">
        </div>
        <div class="product-info-right top-10 start-50 translate-middle ps-5">
            <p class="product-category">snack surprise</p>
            <h3 class="product-title">Happy Combo</h3>
            <p class="product-price product-price-3">Rp 75.000</p>
        </div>
    </div>

    <div class="product-card-right d-flex justify-content-center align-items-center">
        <div class="product-info-left top-10 end-45 translate-middle ps-5">
            <p class="product-category">snack tower</p>
            <h3 class="product-title">Ultimate Combo</h3>
            <p class="product-price product-price-4">Rp 175.000</p>
        </div>
        <div class="product-image">
            <img src="{{ asset('images/Group20bener.png')}}">
        </div>
    </div>
</section>


    <!-- Footer -->
    <section class="Footer">
        <div class="footer-container">
            <div class="footer-logo">
                <img src="{{ asset('images/logo.png') }}" alt="Cemilku Logo">
            </div>

            <div class="footer-info">
                <p><strong>Contact us:</strong></p>
                <p>Email: <a href="mailto:cemilku@gmail.com">cemilku@gmail.com</a></p>
                <p>Phone: 555-567-8901</p>
            </div>

            <div class="footer-social">
                <a href="https://www.instagram.com/christo_s.m?utm_source=ig_web_button_share_sheet&igsh=ZDNlZDc0MzIxNw==" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/ig.png') }}" alt="Instagram">
                </a>
                <a href="https://twitter.com/username" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/twit.png') }}" alt="Twitter">
                </a>
                <a href="https://facebook.com/username" target="_blank" rel="noopener noreferrer">
                    <img src="{{ asset('images/fb.png') }}" alt="Facebook">
                </a>
            </div>
        </div>

        <hr class="footer-divider">
        <p class="footer-copyright">© 2025 Cemilku. All Rights Reserved.</p>
    </section>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO"crossorigin="anonymous">
    </script>

</body>
</html>


<!DOCTYPE html>
<html lang="en">


