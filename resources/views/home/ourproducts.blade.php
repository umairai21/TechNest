<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>TechNest</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="famms/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="famms/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="famms/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="famms/css/responsive.css" rel="stylesheet" />
       <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Raleway:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="home/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="home/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
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
   <body class="sub_page">
      <div class="hero_area">
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
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fluid">
            <div class="row">
               
            </div>
         </div>
      </section>
      <!-- end inner page section -->
      <!-- product section -->
      <section class="product_section layout_padding">
         <div class="container">
            <div class="heading_container heading_center">
               <h2>
                  Our <span>products</span>
               </h2><br><br>
               <div class="col-md-12">
                <div class="category-buttons">
                    <button class="btn category-filter" data-category="All">All</button>
                    @foreach($categories as $category)
                        <button class="btn category-filter" data-category="{{ $category->category_name }}">{{ $category->category_name }}</button>
                    @endforeach
                </div>
            </div>
            </div>
            <div class="row">
            @foreach($product as $product)
               <div class="col-sm-6 col-md-4 col-lg-3 product-item" data-category="{{ $product->category }}" >
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$product->id)}}" class="option1">
                            Product details
                           </a>
                           <form action="{{url('add_cart',$product->id)}}" method="post" >
                              @csrf
                              <div class="row">
                                 <div class="col-md-4">
                                    <input type="number" name="quantity" value="1" min="1" style="width:100px;">
                                 </div>
                                  <div class="col-md-4" style="margin-left: 20px;">
                                       <!-- Dropdown to select a branch -->
                                       <select name="branch" id="branch">
                                          <option value="">Select Branch</option>
                                          @foreach($branches as $branch)
                                             <option value="{{ $branch->id }}">{{ $branch->branch_name }}</option>
                                          @endforeach
                                       </select>
                                  </div>
                                  
                                 <div class="col-md">
                                     <input type="submit" value="Add To Cart" style="border-radius: 30px;font-size:15px;">
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$product->image}}"  alt="">
                     </div>
                     <div class="detail-box">
                        <h5 style="margin-left:0;">
                          {{$product->title}}
                        </h5 >
                        @if($product->discount_price!=null)
                        <h6 style="color:red;margin-right:15px;margin-left:15px;">
                          Discount Price: 
                          <br>
                          ${{$product->discount_price}}
                        </h6>
                        <h6 style="text-decoration:line-through;color:blue;">
                          Price: 
                          <br>
                          ${{$product->price}}
                        </h6>
                        @else
                        <h6 style="color:blue;">
                          Price:
                          <br>
                          ${{$product->price}}
                        </h6>
                        @endif
                     </div>
                  </div>
               </div>
               @endforeach
            </div>
         </div>
      </section>
      <!-- end product section -->
      <!-- footer section -->
      <footer class="footer_section">
         <div class="container">
            <div class="row">
               <div class="col-md-4 footer-col">
                  <div class="footer_contact">
                     <h4>
                        Reach at..
                     </h4>
                     <div class="contact_link_box">
                        <a href="">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>
                        Location
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span>
                        Call +01 1234567890
                        </span>
                        </a>
                        <a href="">
                        <i class="fa fa-envelope" aria-hidden="true"></i>
                        <span>
                        demo@gmail.com
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="footer_detail">
                     <a href="index.html" class="footer-logo">
                     Famms
                     </a>
                     <p>
                        Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with
                     </p>
                     <div class="footer_social">
                        <a href="">
                        <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                        <a href="">
                        <i class="fa fa-pinterest" aria-hidden="true"></i>
                        </a>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 footer-col">
                  <div class="map_container">
                     <div class="map">
                        <div id="googleMap"></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-info">
               <div class="col-lg-7 mx-auto px-0">
                  <p>
                     &copy; <span id="displayYear"></span> All Rights Reserved By
                     <a href="https://html.design/">Free Html Templates</a><br>
         
                     Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                  </p>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer section -->
      <!-- jQery -->
      <script src="famms/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="famms/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="famms/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="famms/js/custom.js"></script>
      <script>
    $(document).ready(function () {
        // Filter products by category when a category button is clicked
        $('.category-filter').click(function () {
            const category = $(this).data('category');

            // Hide all products
            $('.product-item').hide();

            // If 'All' is selected, show all products
            if (category === 'All') {
                $('.product-item').show();
            } else {
                // Show products matching the selected category
                $(`.product-item[data-category="${category}"]`).show();
            }
        });
    });
</script>
   </body>
</html>