<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TechNest</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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
        <h1 class="d-flex align-items-center">TechNest</h1>
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
        
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <h2 data-aos="fade-up">Focus On What Matters</h2>
          <blockquote data-aos="fade-up" data-aos-delay="100">
            <p>"Discover Your Dreams, Shop with Ease!
              Unleash the Shopaholic in You,
              Where Style Meets Convenience,
              Explore, Click, and Make it Yours Today!" </p>
          </blockquote>
         
          
          <div class="d-flex" data-aos="fade-up" data-aos-delay="200">
        
        
          </div>
        </div>
      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= Why Choose Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Why Choose Us</h2>

        </div>

        <div class="row g-0" data-aos="fade-up" data-aos-delay="200">

          <div class="col-xl-5 img-bg" style="background-image: url('home/assets/img/why-us-bg.jpg')"></div>
          <div class="col-xl-7 slides  position-relative">

            <div class="slides-1 swiper">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Quality and Selection</h3>
                    <p>When it comes to online shopping, quality and selection are paramount, and that's precisely why you should choose us. Our commitment to sourcing the finest products ensures that you'll always find premium items that meet your needs. Our extensive selection caters to diverse tastes and preferences, making it effortless for you to discover the perfect products. With us, you're not just shopping; you're choosing excellence and variety.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Exceptional Customer Service</h3>
                    <p>At our e-commerce store, your satisfaction is our top priority. We take pride in providing exceptional customer service that goes above and beyond. Our dedicated team is here to assist you every step of the way, from answering your queries promptly to resolving any concerns with care and efficiency. When you choose us, you're choosing a seamless and delightful shopping experience.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Trust and Reliability</h3>
                    <p>Trust is the foundation of any successful e-commerce relationship, and we've built ours on reliability and integrity. With a track record of delivering on promises and ensuring secure transactions, we've earned the trust of countless customers. When you choose us, you're choosing a partner you can depend on. Join the community of satisfied shoppers who have made us their preferred choice for online shopping.</p>
                  </div>
                </div><!-- End slide item -->

                <div class="swiper-slide">
                  <div class="item">
                    <h3 class="mb-3">Fast and Convenient Shipping</h3>
                    <p>Time is precious, and we respect yours. When you choose us, you're choosing lightning-fast and hassle-free shipping. We understand the anticipation of receiving your order, and we work diligently to ensure your items reach your doorstep swiftly and securely. Our reliable shipping options are designed to accommodate your schedule and provide the convenience you deserve. Make the smart choice today and experience the joy of prompt deliveries with us.</p>
                  </div>
                </div><!-- End slide item -->

              </div>
              <div class="swiper-pagination"></div>
            </div>
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          </div>

        </div>

      </div>
    </section><!-- End Why Choose Us Section -->

    <!-- ======= Our Services Section ======= -->
    <section id="services-list" class="services-list">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Our Services</h2>

        </div>

        <div class="row gy-5">

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-briefcase" style="color: #f57813;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Seamless Shopping Experience:</a></h4>
              <p class="description"> Our user-friendly platform is designed to make your shopping journey as smooth as possible. Browse, search, and checkout with ease, all at your fingertips.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-card-checklist" style="color: #15a04a;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Secure Payment Options:</a></h4>
              <p class="description"> Your financial security is our priority. We offer a range of secure payment methods to ensure your transactions are protected and worry-free.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-bar-chart" style="color: #d90769;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Track Your Orders :</a></h4>
              <p class="description"> Stay in control of your purchases by easily tracking your orders in real-time. Know exactly when your items will arrive</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-binoculars" style="color: #15bfbc;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Personalized Recommendations: </a></h4>
              <p class="description">Discover products tailored to your preferences with our personalized recommendation engine. Get the most relevant suggestions to enhance your shopping experience.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-brightness-high" style="color: #f5cf13;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">24/7 Customer Support:</a></h4>
              <p class="description"> Our dedicated customer support team is available around the clock to assist you with any inquiries or concerns. Your satisfaction is our guarantee.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-calendar4-week" style="color: #1335f5;"></i></div>
            <div>
              <h4 class="title"><a href="#" class="stretched-link">Exclusive Deals and Promotions:</a></h4>
              <p class="description"> Be the first to know about our special offers and exclusive promotions. Join our newsletter to stay updated on exciting discounts and sales events.</p>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>
    </section><!-- End Our Services Section -->

    <!-- ======= Call To Action Section ======= -->
    <section id="call-to-action" class="call-to-action">
      <div class="container" data-aos="fade-up">
        <div class="row justify-content-center">
          <div class="col-lg-6 text-center">
            <h3> "Experience the Future of Shopping"</h3>
            <p>"Click, Shop, and Elevate Your Lifestyle Today!"</p>
            <a class="cta-btn" href="#">Call To Action</a>
          </div>
        </div>

      </div>
    </section><!-- End Call To Action Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

      <div class="container" data-aos="fade-up">
        <div class="row">
          <div class="col-lg-7" data-aos="fade-up" data-aos-delay="100">
            <h3>Powerful Features for <br>Your Business</h3>

            <div class="row gy-4">

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-store-line" style="color: #ffbb2c;"></i>
                  <span>User-Friendly Interface</span>
                </div>
              </div><!-- End Icon List Item-->

              

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
                  <span>Secure Payment Options</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
                  <span>Responsive Customer Service</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-database-2-line" style="color: #47aeff;"></i>
                  <span>Inventory Management</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
                  <span>Shopping Cart and Checkout</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
                  <span>Advanced Analytics</span>
                </div>
              </div><!-- End Icon List Item-->

              <div class="col-md-6">
                <div class="icon-list d-flex">
                  <i class="ri-base-station-line" style="color: #ff5828;"></i>
                  <span>Security and Trust Signals</span>
                </div>
              </div><!-- End Icon List Item-->
            </div>
          </div>
          <div class="col-lg-5 position-relative" data-aos="fade-up" data-aos-delay="200">
            <div class="phone-wrap">
              <img src="home/assets/img/iphone.png" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>

      </div>

      <div class="details">
        <div class="container" data-aos="fade-up" data-aos-delay="300">
          <div class="row">
            <div class="col-md-6">
              <h4>"Seamless Shopping Anywhere, Anytime"</h4>
              <p>Our website adapts to your device, so you can shop with ease on your phone, tablet, or desktop, ensuring a flawless experience wherever you go.</p>
              <a href="#about" class="btn-get-started">Get Started</a>
            </div>
          </div>

        </div>
      </div>

    </section><!-- End Features Section -->

   
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="footer-content">
      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-5 col-md-12 footer-info">
            <a href="index.html" class="logo d-flex align-items-center">
              <span>TechNest</span>
            </a>
            <p>At TechNest, we're dedicated to bringing you the latest trends and timeless classics, all at your fingertips. Our carefully curated selection of products is designed to cater to your style, needs, and preferences. With a commitment to quality, convenience, and customer satisfaction, we invite you to explore our online store and elevate your shopping experience. Discover the perfect pieces to complement your lifestyle and make every purchase a delightful journey with us.</p>
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
          &copy; Copyright <strong><span>TechNest</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nova-bootstrap-business-template/ -->
          
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