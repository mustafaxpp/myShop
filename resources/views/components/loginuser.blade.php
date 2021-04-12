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
                                                            {{-- <a class="nav-item nav-link last" href="#"><img src="images/search_icon.png"></a>
                           <a class="nav-item nav-link last" href="contact.html"><img src="images/shop_icon.png"></a> --}}
                                                            @if (Route::has('login'))
                                                                @auth
                                                                    <a href="{{ url('/logout') }}"
                                                                        class="nav-item nav-link">LogOut</a>
                                                                @elseif (Route::has('register'))
                                                                    <a href="{{ route('register') }}"
                                                                        class="nav-item nav-link">Register</a>
                                                                @endauth
                                                            @endif
                                                        </div>
                                                        <a class="nav-item nav-link last" href="#"><img
                                                                src="images/search_icon.png"></a>
                                                        <a class="nav-item nav-link last"
                                                            href="{{ route('cart') }}"><img
                                                                src="images/shop_icon.png"></a>
                                                    </div>
                                                </nav>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                    {{ $slot }}


                                    @livewireScript
                            </body>

