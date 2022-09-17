<div class="header-area header-transparrent ">
    <div class="main-header header-sticky">
        <div class="container">
            <div class="row align-items-center">
                <!-- Logo -->
                <div class="col-xl-2 col-lg-2 col-md-2">
                    <div class="logo">
                        <a href="/"><img src="{{ asset('base/img/logo/bkdlogo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-xl-10 col-lg-10 col-md-10">
                    <!-- Main-menu -->
                    <div class="main-menu f-right d-none d-lg-block">
                        <nav>
                            <ul id="navigation">
                                <li class="active"><a href="/"> Beranda</a></li>
                                <li><a href="#info">Informasi</a></li>
                                <li><a href="#cs">Call Center</a></li>
                                @if (Route::has('login'))
                                <li><a href="{{ route('login') }}">Login</a></li>
                                @endif
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- Mobile Menu -->
                <div class="col-12">
                    <div class="mobile_menu d-block d-lg-none"></div>
                </div>
            </div>
        </div>
    </div>
</div>