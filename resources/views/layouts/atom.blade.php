<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>BKPSDM Pessel | Simulai</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('base/img/garuda.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('base/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('base/css/style.css') }}">
</head>

<body>

    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="{{ asset('base/img/logo/bkd.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    <header>
        <!-- Header Start -->
        @include('layouts.head')
        <!-- Header End -->
    </header>

    <main>

        @yield('content')

    </main>
    @include('layouts.foot')

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="{{ asset('base/js/vendor/modernizr-3.5.0.min.js') }}"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="{{ asset('base/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('base/js/popper.min.js') }}"></script>
    <script src="{{ asset('base/js/bootstrap.min.js') }}"></script>
    <!-- Jquery Mobile Menu -->
    <script src="{{ asset('base/js/jquery.slicknav.min.js') }}"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="{{ asset('base/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('base/js/slick.min.js') }}"></script>
    <!-- Date Picker -->
    <script src="{{ asset('base/js/gijgo.min.js') }}"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="{{ asset('base/js/wow.min.js') }}"></script>
    <script src="{{ asset('base/js/animated.headline.js') }}"></script>
    <script src="{{ asset('base/js/jquery.magnific-popup.js') }}"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="{{ asset('base/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('base/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('base/js/jquery.sticky.js') }}"></script>

    <!-- contact js -->
    <script src="{{ asset('base/js/contact.js') }}"></script>
    <script src="{{ asset('base/js/jquery.form.js') }}"></script>
    <script src="{{ asset('base/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('base/js/mail-script.js') }}"></script>
    <script src="{{ asset('base/js/jquery.ajaxchimp.min.js') }}"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="{{ asset('base/js/plugins.js') }}"></script>
    <script src="{{ asset('base/js/main.js') }}"></script>

</body>

</html>