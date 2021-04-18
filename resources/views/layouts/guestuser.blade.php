 <!DOCTYPE html>
 <html lang="en">

 <head>
     <!-- basic -->
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <!-- mobile metas -->
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="viewport" content="initial-scale=1, maximum-scale=1">
     <!-- site metas -->
     <title>MyShop</title>
     <meta name="keywords" content="">
     <meta name="description" content="">
     <meta name="author" content="">
     <!-- bootstrap css -->
     <link rel="stylesheet" href='{{ asset('css/bootstrap.min.css') }}'>
     <!-- style css -->
     <link rel="stylesheet" href='{{ asset('css/style.css') }}'>
     <!-- Responsive-->
     <link rel="stylesheet" href='{{ asset('css/responsive.css') }}'>
     <!-- fevicon -->
     <link rel="icon" href="images/fevicon.png" type="image/gif" />
     <!-- Scrollbar Custom CSS -->
     <link rel="stylesheet" href='{{ asset('css/jquery.mCustomScrollbar.min.css') }}'>
     <!-- Tweaks for older IEs-->
     <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
     <!-- owl stylesheets -->
     <link rel="stylesheet" href='{{ asset('css/owl.carousel.min.css') }}'>
     <link rel="stylesheet" href='{{ asset('css/owl.theme.default.min.css') }}'>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
         media="screen">
     @livewireStyles
 </head>
 <!-- body -->


 <body class="main-layout">
     <!-- header section start -->
     <div class="header_section">
         <div class="container">
             <div class="row">
                 <div class="col-sm">
                     <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
                 </div>
                 <div class="col-sm-11">
                     <nav class="navbar navbar-expand-lg navbar-light bg-light">
                         <div class="container-fluid">
                             <a class="navbar-brand" href="#">Navbar</a>
                             <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                                 data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown"
                                 aria-expanded="false" aria-label="Toggle navigation">
                                 <span class="navbar-toggler-icon"></span>
                             </button>
                             <div class="collapse navbar-collapse" id="navbarNavDropdown">
                                 <ul class="navbar-nav">
                                     <li class="nav-item">
                                         <a class="nav-item nav-link" href="{{ route('index') }}">Home</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-item nav-link" href="{{ route('collection') }}">Collection</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-item nav-link" href="{{ route('shoes') }}">Shoes</a>
                                     </li>
                                     <li class="nav-item">
                                         <a class="nav-item nav-link" href="{{ route('contact') }}">Contact</a>
                                     </li>
                                     @if (Route::has('login'))
                                         @auth
                                             <li class="nav-item dropdown" role="button">
                                                 <a class="nav-link dropdown-toggle" id="navbarNavAltMarkup"
                                                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                     {{ Auth::user()->name }}
                                                 </a>
                                                 <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                                                     <a class="dropdown-item"
                                                         href="{{ route('profile.show') }}">profile</a>
                                                     <form method="POST" action="{{ route('logout') }}">
                                                         @csrf
                                                         <div class="dropdown-divider"></div>
                                                         <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                        this.closest('form').submit();">Log Out</a>
                                                     </form>
                                                 </div>
                                             </li>
                                         @else
                                                     <a href="{{ route('register') }}"
                                                         class="nav-item nav-link">Register</a>
                                                     <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>
                                         @endauth
                                     @endif

                                     <a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a>
                                     <a class="nav-item nav-link last" href="{{ route('cart') }}">
                                         <img class="inline-block" src="images/shop_icon.png">
                                         {{-- <a class="nav-item nav-link last" href="{{ route('cart') }}">
                                             <img class="inline-block" src="images/shop_icon.png"> --}}

                                         @livewire('count-component', [], key(1))</a>
                                 </ul>
                             </div>
                         </div>
                     </nav>
                 </div>
             </div>
         </div>
         < {{ $slot }} <!-- section footer start -->
             <div class="section_footer">
                 <div class="container">
                     <div class="mail_section">
                         <div class="row">
                             <div class="col-sm-6 col-lg-2">
                                 <div><a href="#"><img src="images/footer-logo.png"></a></div>
                             </div>
                             <div class="col-sm-6 col-lg-2">
                                 <div class="footer-logo"><img src="images/phone-icon.png"><span class="map_text">(71)
                                         1234567890</span></div>
                             </div>
                             <div class="col-sm-6 col-lg-3">
                                 <div class="footer-logo"><img src="images/email-icon.png"><span
                                         class="map_text">Demo@gmail.com</span></div>
                             </div>
                             <div class="col-sm-6 col-lg-3">
                                 <div class="social_icon">
                                     <ul>
                                         <li><a href="#"><img src="images/fb-icon.png"></a></li>
                                         <li><a href="#"><img src="images/twitter-icon.png"></a></li>
                                         <li><a href="#"><img src="images/in-icon.png"></a></li>
                                         <li><a href="#"><img src="images/google-icon.png"></a></li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="col-sm-2"></div>
                         </div>
                     </div>
                     <div class="footer_section_2">
                         <div class="row">
                             <div class="col-sm-4 col-lg-2">
                                 <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum dolor sit amet,
                                     consectetur
                                     ipsum dolor sit amet,</p>
                             </div>
                             <div class="col-sm-4 col-lg-2">
                                 <h2 class="shop_text">Address </h2>
                                 <div class="image-icon"><img src="images/map-icon.png"><span class="pet_text">No 40
                                         Baria
                                         Sreet 15/2 NewYork City, NY, United States.</span></div>
                             </div>
                             <div class="col-sm-4 col-md-6 col-lg-3">
                                 <h2 class="shop_text">Our Company </h2>
                                 <div class="delivery_text">
                                     <ul>
                                         <li>Delivery</li>
                                         <li>Legal Notice</li>
                                         <li>About us</li>
                                         <li>Secure payment</li>
                                         <li>Contact us</li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="col-sm-6 col-lg-3">
                                 <h2 class="adderess_text">Products</h2>
                                 <div class="delivery_text">
                                     <ul>
                                         <li>Prices drop</li>
                                         <li>New products</li>
                                         <li>Best sales</li>
                                         <li>Contact us</li>
                                         <li>Sitemap</li>
                                     </ul>
                                 </div>
                             </div>
                             <div class="col-sm-6 col-lg-2">
                                 <h2 class="adderess_text">Newsletter</h2>
                                 <div class="form-group">
                                     <input type="text" class="enter_email" placeholder="Enter Your email" name="Name">
                                 </div>
                                 <button class="subscribr_bt">Subscribe</button>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
     </div>
     <!-- section footer end -->
     <div class="copyright">2021


         <!-- Javascript files-->
         <script src="js/jquery.min.js"></script>
         <script src="js/popper.min.js"></script>
         <script src="js/bootstrap.bundle.min.js"></script>
         <script src="js/jquery-3.0.0.min.js"></script>
         <script src="js/plugin.js"></script>
         <!-- sidebar -->
         <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
         <script src="js/custom.js"></script>
         <!-- javascript -->
         <script src="js/owl.carousel.js"></script>
         <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js">
         </script>
         <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
             integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
             crossorigin="anonymous">
         </script>

         @livewireScripts
 </body>

 </html>
