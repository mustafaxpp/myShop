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
     <link rel="stylesheet" href='{{ asset('css/mystyle.css') }}'>
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
                 <div class="col-lg-1">
                     <div class="logo img-fluid"><a href="{{ route('index') }}"><img src="images/logo.png"></a></div>
                 </div>
                 <div class="col-lg-11">
                     <nav class="navbar navbar-expand-lg navbar-light bg-light">
                         <div class="container-fluid">
                             {{-- <a class="navbar-brand" href="#">Navbar</a> --}}
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
                                             <li class="nav-item dropdown">
                                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                     role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                     {{ Auth::user()->name }}
                                                 </a>
                                                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                     <a class="nav-link text-dark dropdown-item"
                                                         href="{{ route('profile.show') }}">profile</a>
                                                     <form method="POST" action="{{ route('logout') }}">
                                                         @csrf
                                                         <div class="dropdown-divider"></div>
                                                         <a class="nav-link text-dark dropdown-item"
                                                             href="{{ route('logout') }}" onclick="event.preventDefault();
                                                            this.closest('form').submit();">Log Out</a>
                                                     </form>
                                                 </div>
                                             </li>
                                         @else
                                             <li class="nav-item dropdown">
                                                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                                     role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                                     Sign In
                                                 </a>
                                                 <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                     <li> <a href="{{ route('register') }}"
                                                             class="nav-link text-dark dropdown-item">Register</a>
                                                     </li>
                                                     <li><a href="{{ route('login') }}"
                                                             class="nav-link text-dark dropdown-item">Log in</a></li>
                                                 </ul>
                                             </li>
                                         @endauth
                                     @endif

                                     <a class="nav-item nav-link last" href="#"><img height="40" width="30"
                                             src="images/search_icon.png"></a>
                                             @livewire('count-component', [], key(1))
                                     <a href="{{ route('cart') }}" title=""><svg id="Layer_3"
                                             class="ml-3 img-responsive" height="57" viewBox="0 0 64 64" width="40"
                                             xmlns="http://www.w3.org/2000/svg" data-name="Layer 3">
                                             <path
                                                 d="m42 2a11 11 0 0 0 -2.1 21.794l2.1 4.206 2.1-4.206a11 11 0 0 0 -2.1-21.794zm4.332 13.39-4.332 3.61-4.332-3.61a4.637 4.637 0 0 1 -1.668-3.562 2.828 2.828 0 0 1 4.828-2l1.172 1.172 1.172-1.172a2.828 2.828 0 0 1 4.828 2 4.637 4.637 0 0 1 -1.668 3.562z"
                                                 fill="#f4b2b0" />
                                             <g fill="#b3404a">
                                                 <path
                                                     d="m60 47h-34.413a1 1 0 0 1 -.974-.773l-5.913-25.363a4.979 4.979 0 0 0 -4.874-3.864h-9.826a3 3 0 0 0 0 6h8.413a1 1 0 0 1 .974.772l5.557 23.819a6.972 6.972 0 0 0 6.817 5.409h1.779a6 6 0 1 0 8.92 0h11.08a6 6 0 1 0 8.92 0h3.54a3 3 0 0 0 0-6zm-24 10a4 4 0 1 1 -4-4 4 4 0 0 1 4 4zm20 0a4 4 0 1 1 -4-4 4 4 0 0 1 4 4zm4-6h-34.239a4.979 4.979 0 0 1 -4.869-3.864l-5.558-23.818a2.987 2.987 0 0 0 -2.921-2.318h-8.413a1 1 0 0 1 0-2h9.826a2.989 2.989 0 0 1 2.922 2.318l5.918 25.364a2.987 2.987 0 0 0 2.921 2.318h34.413a1 1 0 0 1 0 2z" />
                                                 <path
                                                     d="m21.218 21.376a1 1 0 0 0 -.193.846l5 22a1 1 0 0 0 .975.778h30a1 1 0 0 0 .975-.778l5-22a1 1 0 0 0 -.975-1.222h-11.072a12 12 0 1 0 -17.855 0h-11.073a1 1 0 0 0 -.782.376zm18 3.294 1.664 3.33h-7.055l-.681-5h2.235a11.9 11.9 0 0 0 3.836 1.67zm9.402-1.67h2.235l-.682 5h-7.055l1.665-3.33a11.913 11.913 0 0 0 3.837-1.67zm.462 13h-6.082v-6h6.9zm2.836-6h7.238l-1.363 6h-6.693zm-8.918 8h5.809l-.682 5h-5.127zm-2 5h-5.127l-.682-5h5.809zm0-13v6h-6.082l-.818-6zm-8.1 6h-6.693l-1.363-6h7.238zm-6.238 2h6.511l.682 5h-6.055zm29.538 5h-6.055l.682-5h6.511zm3.409-15h-7.42l.682-5h7.874zm-17.609-25a10 10 0 0 1 1.913 19.812 1 1 0 0 0 -.7.535l-1.213 2.417-1.208-2.417a1 1 0 0 0 -.7-.535 10 10 0 0 1 1.908-19.812zm-10.873 20 .682 5h-7.42l-1.136-5z" />
                                                 <circle cx="32" cy="57" r="2" />
                                                 <circle cx="52" cy="57" r="2" />
                                                 <path
                                                     d="m37.028 16.158 4x`.332 3.61a1 1 0 0 0 1.28 0l4.332-3.61a5.62 5.62 0 0 0 2.028-4.329 3.828 3.828 0 0 0 -6.536-2.707l-.464.464-.464-.464a3.828 3.828 0 0 0 -6.536 2.707 5.62 5.62 0 0 0 2.028 4.329zm1.801-6.158a1.816 1.816 0 0 1 1.293.536l1.171 1.171a1 1 0 0 0 1.414 0l1.171-1.171a1.829 1.829 0 0 1 3.122 1.293 3.625 3.625 0 0 1 -1.309 2.793l-3.691 3.078-3.691-3.076a3.625 3.625 0 0 1 -1.309-2.795 1.83 1.83 0 0 1 1.829-1.829z" />
                                             </g>
                                         </svg>

                                        </a>
                                     <a href="{{ route('cart') }}"><img class="inline-block ml-3"
                                             style="margin-top:8px;" src="images/add-to-favorites.png" height="57"
                                             width="40"></a>
                             </div>
                         </div>
                     </nav>
                 </div>
             </div>
         </div>
          {{ $slot }} <!-- section footer start -->
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
         <script src="https://www.paypal.com/sdk/js?client-id=test"></script>
          <script>
            paypal.Buttons({
              createOrder: function(data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                  purchase_units: [{
                    amount: {
                      value: '0.01'
                    }
                  }]
                });
              },
              onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                  // This function shows a transaction success message to your buyer.
                  alert('Transaction completed by ' + details.payer.name.given_name);
                });
              }
            }).render('#paypal-button-container');
            //This function displays Smart Payment Buttons on your web page.
          </script>
         @livewireScripts
 </body>

 </html>
