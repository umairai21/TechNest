<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TechNest</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <!-- Custom styles for this template -->
  <link href="famms/css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="famms/css/responsive.css" rel="stylesheet" />
  <!-- bootstrap core css -->
 <link rel="stylesheet" type="text/css" href="famms/css/bootstrap.css" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="home/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="home/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="home/assets/vendor/remixicon/remixicon.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="home/assets/css/main.css" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Nova
  * Updated: Aug 30 2023 with Bootstrap v5.3.1
  * Template URL: https://bootstrapmade.com/nova-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="page-index">

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="index.html" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="assets/img/logo.png" alt=""> -->
        <h1 class="d-flex align-items-center" style="color:black;">TechNest</h1>
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="{{url('about')}}">About</a></li>
          <li><a href="{{url('services')}}">Services</a></li>
          <li><a href="{{url('/ourproducts')}}">Our Products</a></li>
          <li><a href="{{url('show_cart')}}">Cart</a></li>
          <li><a href="{{url('purchase_history')}}">Purchase History</a></li>

          @if (Route::has('login'))
          @auth
          <x-app-layout>
 
          </x-app-layout>

          @else
          <a href="{{ route('login') }}" class="btn-get-started">Login</a>
          <a href="{{ route('register') }}" class="btn-get-started">Register</a>

          @endauth
          @endif

         
        </ul>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->
  <section id="hero" class="hero2 d-flex align-items-center">
    <div class="container">
      
      
    </div>
  </section><!-- End Hero Section -->
  <main id="main">
    <div class="center_div">
        <table>
            <tr>
                <th class="deg">Product Title</th>
                <th class="deg">Quantity Purchased</th>
                <th class="deg">Amount</th>
                <th class="deg">Image</th>
                <th class="deg">Action</th>
            </tr>
            <?php $totalprice = 0; ?>
            @foreach($cart as $cart)
            <tr >
                <td class="data">{{$cart->product_title}}</td>
                <td class="data">{{$cart->quantity}}</td>
                <td class="data">{{$cart->price}}</td>
                <td><img class="img_deg" src="/product/{{$cart->image}}"></td>
                <td><a class="btn btn-danger" onclick="return confirm('Are you to remove this product?')" href="{{url('remove_cart',$cart->id)}} ">Remove Product</td>
            </tr>
            <?php $totalprice = $totalprice + $cart->price;  ?>
            @endforeach

        </table>
        <div>
            <h1 class="total"><b>Total Amount : ${{$totalprice}}</b></h1>
        </div>

        <div>
          <h1 style="font-size: 25px; padding-bottom: 15px;">Payment Method</h1>
          <a href="{{url('cash_order')}}" class="btn btn-danger" onclick="return confirm ('Are you sure to proceed?')">Cash on Delivery</a>
          <a href="{{url('stripe',$totalprice)}}" class="btn btn-danger">Pay using Card</a>
        </div>
    </div>

    
  </main>

   <!-- ======= Footer ======= -->
   <footer id="footer" class="footer">

    <div class="footer-content">
        <div class="container">
            <div class="row gy-4">
            <div class="col-lg-5 col-md-12 footer-info">
                <a href="index.html" class="logo d-flex align-items-center">
                <span>Nova</span>
                </a>
                <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus.</p>
                <div class="social-links d-flex  mt-3">
                <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Useful Links</h4>
                <ul>
                <li><i class="bi bi-dash"></i> <a href="#">Home</a></li>
                <li><i class="bi bi-dash"></i> <a href="#">About us</a></li>
                <li><i class="bi bi-dash"></i> <a href="#">Services</a></li>
                <li><i class="bi bi-dash"></i> <a href="#">Terms of service</a></li>
                <li><i class="bi bi-dash"></i> <a href="#">Privacy policy</a></li>
                </ul>
            </div>

            <div class="col-lg-2 col-6 footer-links">
                <h4>Our Services</h4>
                <ul>
                <li><i class="bi bi-dash"></i> <a href="#">Web Design</a></li>
                <li><i class="bi bi-dash"></i> <a href="#">Web Development</a></li>
                <li><i class="bi bi-dash"></i> <a href="#">Product Management</a></li>
                <li><i class="bi bi-dash"></i> <a href="#">Marketing</a></li>
                <li><i class="bi bi-dash"></i> <a href="#">Graphic Design</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                <h4>Contact Us</h4>
                <p>
                A108 Adam Street <br>
                New York, NY 535022<br>
                United States <br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
                </p>

            </div>

            </div>
        </div>
    </div>

<div class="footer-legal">
  <div class="container">
    <div class="copyright">
      &copy; Copyright <strong><span>Nova</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
    </div>
  </div>
</div>
</footer><!-- End Footer --><!-- End Footer -->

<a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="home/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="home/assets/vendor/aos/aos.js"></script>
<script src="home/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="home/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="home/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="home/assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="home/assets/js/main.js"></script>

</body>

</html>