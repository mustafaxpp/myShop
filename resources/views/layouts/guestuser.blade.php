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
                <div class="col-sm-1"></div>
                <div class="col-sm-2">
                    <div class="logo"><a href="#"><img src="images/logo.png"></a></div>
                </div>
                <div class="col-sm-9">
                    <nav class="navbar navbar-expand-lg navbar-light bg-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>

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
                                <link rel="stylesheet"
                                    href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
                                <!-- owl stylesheets -->
                                <link rel="stylesheet" href='{{ asset('css/owl.carousel.min.css') }}'>
                                <link rel="stylesheet" href='{{ asset('css/owl.theme.default.min.css') }}'>
                                <link rel="stylesheet"
                                    href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
                                    media="screen">

                                <!-- Styles -->
                                <link rel="stylesheet" href="{{ mix('css/app.css') }}">

                                <!-- Scripts -->
                                <script src="{{ mix('js/app.js') }}" defer></script>
                                @livewireStyles
                            </head>
                            <!-- body -->

                            <body class="main-layout">
                                <!-- header section start -->
                                <div class="header_section">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="logo"><a href="/"><img src="images/logo.png"></a></div>
                                            </div>
                                            <div class="col-sm-9">
                                                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                                                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                                                        data-target="#navbarNavAltMarkup"
                                                        aria-controls="navbarNavAltMarkup" aria-expanded="false"
                                                        aria-label="Toggle navigation">
                                                        <span class="navbar-toggler-icon"></span>
                                                    </button>
                                                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                                        <div class="navbar-nav">
                                                            <a class="nav-item nav-link"
                                                                href="{{ route('index') }}">Home</a>
                                                            <a class="nav-item nav-link"
                                                                href="{{ route('collection') }}">Collection</a>
                                                            <a class="nav-item nav-link"
                                                                href="{{ route('shoes') }}">Shoes</a>
                                                            <a class="nav-item nav-link"
                                                                href="{{ route('racingboots') }}">Racing Boots</a>
                                                            <a class="nav-item nav-link"
                                                                href="{{ route('contact') }}">Contact</a>
                                                            @if (Route::has('login'))
                                                                @auth
                                                                    <div class="nav-item nav-link">
                                                                        <x-jet-dropdown align="right" width="48">
                                                                            <x-slot name="trigger">
                                                                                @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                                                                    <button
                                                                                        class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                                                        <img class="h-8 w-8 rounded-full object-cover"
                                                                                            src="{{ Auth::user()->profile_photo_url }}"
                                                                                            alt="{{ Auth::user()->name }}" />
                                                                                    </button>
                                                                                @else
                                                                                    <span class="inline-flex rounded-md">
                                                                                        <button type="button"
                                                                                            class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition">
                                                                                            {{ Auth::user()->name }}

                                                                                            <svg class="ml-2 -mr-0.5 h-4 w-4"
                                                                                                xmlns="http://www.w3.org/2000/svg"
                                                                                                viewBox="0 0 20 20"
                                                                                                fill="currentColor">
                                                                                                <path fill-rule="evenodd"
                                                                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                                                    clip-rule="evenodd" />
                                                                                            </svg>
                                                                                        </button>
                                                                                    </span>
                                                                                @endif
                                                                            </x-slot>

                                                                            <x-slot name="content">
                                                                                <!-- Account Management -->
                                                                                <div
                                                                                    class="block px-4 py-2 text-xs text-gray-400">
                                                                                    {{ __('Manage Account') }}
                                                                                </div>

                                                                                <x-jet-dropdown-link
                                                                                    href="{{ route('profile.show') }}">
                                                                                    {{ __('Profile') }}
                                                                                </x-jet-dropdown-link>

                                                                                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                                                                                    <x-jet-dropdown-link
                                                                                        href="{{ route('api-tokens.index') }}">
                                                                                        {{ __('API Tokens') }}
                                                                                    </x-jet-dropdown-link>
                                                                                @endif

                                                                                <div class="border-t border-gray-100"></div>

                                                                                <!-- Authentication -->
                                                                                <form method="POST"
                                                                                    action="{{ route('logout') }}">
                                                                                    @csrf

                                                                                    <x-jet-dropdown-link
                                                                                        href="{{ route('logout') }}"
                                                                                        onclick="event.preventDefault();
                                                                            this.closest('form').submit();">
                                                                                        {{ __('Log Out') }}
                                                                                    </x-jet-dropdown-link>
                                                                                </form>
                                                                            </x-slot>
                                                                        </x-jet-dropdown>
                                                                    </div>

                                                                @elseif (Route::has('register'))
                                                                    {{-- <a href="{{ route('register') }}"class="nav-item nav-link">Register</a>
                                            <a href="{{ route('login') }}"class="nav-item nav-link">Log in </a> --}}
                                                                    <li class="nav-item dropdown">
                                                                        <a class="nav-link dropdown-toggle"
                                                                            id="navbarNavAltMarkup"
                                                                            data-toggle="dropdown" aria-haspopup="true"
                                                                            aria-expanded="false">
                                                                            Sign In
                                                                        </a>
                                                                        <div class="dropdown-menu"
                                                                            aria-labelledby="navbarDropdownMenuLink">
                                                                            <a href="{{ route('register') }}"
                                                                                class="nav-item nav-link">Register</a>
                                                                            <a href="{{ route('login') }}"
                                                                                class="nav-item nav-link">Log in</a>
                                                                        </div>
                                                                    </li>
                                                                @endauth
                                                            @endif
                                                        </div>
                                                        <a class="nav-item nav-link last" href="#"><img
                                                                src="images/search_icon.png"></a>
                                                        <a class="nav-item nav-link last" href="contact.html"><img
                                                                src="images/shop_icon.png"></a>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>

                                    {{ $slot }}


                                    <!-- section footer start -->
                                    <div class="section_footer">
                                        <div class="container">
                                            <div class="mail_section">
                                                <div class="row">
                                                    <div class="col-sm-6 col-lg-2">
                                                        <div><a href="#"><img src="images/footer-logo.png"></a></div>
                                                    </div>
                                                    <div class="col-sm-6 col-lg-2">
                                                        <div class="footer-logo"><img src="images/phone-icon.png"><span
                                                                class="map_text">(71)
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
                                                                <li><a href="#"><img src="images/twitter-icon.png"></a>
                                                                </li>
                                                                <li><a href="#"><img src="images/in-icon.png"></a></li>
                                                                <li><a href="#"><img src="images/google-icon.png"></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2"></div>
                                                </div>
                                            </div>
                                            <div class="footer_section_2">
                                                <div class="row">
                                                    <div class="col-sm-4 col-lg-2">
                                                        <p class="dummy_text"> ipsum dolor sit amet, consectetur ipsum
                                                            dolor sit amet, consectetur
                                                            ipsum dolor sit amet,</p>
                                                    </div>
                                                    <div class="col-sm-4 col-lg-2">
                                                        <h2 class="shop_text">Address </h2>
                                                        <div class="image-icon"><img src="images/map-icon.png"><span
                                                                class="pet_text">No 40 Baria
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
                                                            <input type="text" class="enter_email"
                                                                placeholder="Enter Your email" name="Name">
                                                        </div>
                                                        <button class="subscribr_bt">Subscribe</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- section footer end -->
                                            <div class="copyright">2019 All Rights Reserved. <a
                                                    href="https://html.design">Free html
                                                    Templates</a></div>


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
                                            <script
                                                src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js">
                                            </script>
                                            <script>
                                                $(document).ready(function() {
                                                            $(".fancybox").fancybox({
                                                                openEffect: "none",
                                                                closeEffect: "none"
                                                            });


                                                            $('#myCarousel').carousel({
                                                                interval: false
                                                            });

                                                            //scroll slides on swipe for touch enabled devices

                                                            $("#myCarousel").on("touchstart", function(event) {

                                                                var yClick = event.originalEvent.touches[0]
                                                                    .pageY;
                                                                $(this).one("touchmove", function(event) {

                                                                    var yMove = event.originalEvent
                                                                        .touches[0]
                                                                        .pageY;
                                                                    if (Math.floor(yClick - yMove) >
                                                                        1) {
                                                                        $(".carousel").carousel('next');
                                                                    } else if (Math.floor(yClick -
                                                                            yMove) < -1) {
                                                                        $(".carousel").carousel('prev');
                                                                    }
                                                                });
                                                                $(".carousel").on("touchend", function() {
                                                                    $(this).off("touchmove");
                                                                });
                                                            });

                                            </script>
                                            @livewireScripts
                            </body>

</html>
