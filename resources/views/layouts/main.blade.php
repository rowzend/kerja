<!DOCTYPE html>

<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>e-mutasi | Welcome</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="{{asset('asset/vendor/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
        <link href="{{asset('asset/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="{{asset('asset/css/animate.css')}}" rel="stylesheet">
        <link href="{{asset('asset/vendor/swiper/css/swiper.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="{{asset('asset/css/layout.min.css')}}" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body>

        <!--========== HEADER ==========-->
        <header class="header navbar-fixed-top">
            <!-- Navbar -->
            <nav class="navbar" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="menu-container">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="toggle-icon"></span>
                        </button>

                        <!-- Logo -->
                        <div class="logo">
                            <a class="logo-wrap" href="index.html">
                                <img class="logo-img logo-img-main" src="{{asset('asset/img/logo.png')}}" alt="Asentus Logo">
                                <img class="logo-img logo-img-active" src="{{asset('asset/img/logo-dark.png')}}" alt="Asentus Logo">
                            </a>
                        </div>
                        <!-- End Logo -->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    @include('layouts.top')
                    <!-- End Navbar Collapse -->
                </div>
            </nav>
            <!-- Navbar -->
        </header>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
        @include('layouts.carousel')
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        @yield('content')
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
        <footer class="footer">

            <!-- Copyright -->
            <div class="content container">
                <div class="row">
                    <div class="col-xs-6">
                        <img class="footer-logo" src="{{asset('asset/img/logo.png')}}" alt="Asentus Logo">
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="margin-b-0"><a class="color-base fweight-700" href="http://bkpsdm.pesisirselatankab.go.id">E-Mutasi</a> Powered by: <a class="color-base fweight-700" href="#">BKPSDM Pesisir Selatan</a></p>
                    </div>
                </div>
                <!--// end row -->
            </div>
            <!-- End Copyright -->
        </footer>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">BACK</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="{{asset('asset/vendor/jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/vendor/jquery-migrate.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/vendor/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="{{asset('asset/vendor/jquery.easing.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/vendor/jquery.back-to-top.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/vendor/jquery.smooth-scroll.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/vendor/jquery.wow.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/vendor/swiper/js/swiper.jquery.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/vendor/masonry/jquery.masonry.pkgd.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/vendor/masonry/imagesloaded.pkgd.min.js')}}" type="text/javascript"></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="{{asset('asset/js/layout.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/js/components/wow.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/js/components/swiper.min.js')}}" type="text/javascript"></script>
        <script src="{{asset('asset/js/components/masonry.min.js')}}" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>