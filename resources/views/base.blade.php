@extends('layouts.atom')
@section('content')
<!-- Slider Area Start-->
<div class="slider-area ">
    <div class="slider-active">
        <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 col-md-9 ">
                        <div class="hero__caption">
                            <span data-animation="fadeInUp" data-delay=".5s">Si-Mulai</span>
                            <h1 data-animation="fadeInUp" data-delay=".8s">Sistem Informasi<br>Mutasi Lingkup Pegawai</h1>
                            <p data-animation="fadeInUp" data-delay=".12s">Dorem ipsum dolor sitamet, consectetur adipiscing elit, sed do eiusm tempor incididunt ulabore et dolore magna aliqua.</p>
                            <!-- Slider btn -->
                            <div class="slider-btns">
                                <!-- Hero-btn -->
                                <a data-animation="fadeInLeft" data-delay="1.0s" href="#" class="btn radius-btn">Tutorial</a>
                                <!-- Video Btn -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                            <img src="{{ asset('base/img/hero/example.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- <div class="single-slider slider-height slider-padding sky-blue d-flex align-items-center">
                    <div class="container">
                        <div class="row d-flex align-items-center">
                            <div class="col-lg-6 col-md-9 ">
                                <div class="hero__caption">
                                    <span data-animation="fadeInUp" data-delay=".4s">App Landing Page</span>
                                    <h1 data-animation="fadeInUp" data-delay=".6s">Get things done<br>with Appco</h1>
                                    <p data-animation="fadeInUp" data-delay=".8s">Dorem ipsum dolor sitamet, consectetur adipiscing elit, sed do eiusm tempor incididunt ulabore et dolore magna aliqua.</p>

                                    <div class="slider-btns">

                                        <a data-animation="fadeInLeft" data-delay="1.0s" href="industries.html" class="btn radius-btn">Download</a>

                                        <a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn ani-btn" href="https://www.youtube.com/watch?v=1aP-TXUpNoU"><i class="fas fa-play"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="hero__img d-none d-lg-block f-right" data-animation="fadeInRight" data-delay="1s">
                                    <img src="{{ asset('base/img/hero/hero_right.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div> -->
    </div>
</div>
<!-- Slider Area End -->
<!-- Best Pricing Start -->
<section class="best-pricing pricing-padding" data-background="{{ asset('base/img/gallery/best_pricingbg.jpg') }}">
    <div id="info" class="container">
        <!-- Section Tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="section-tittle section-tittle2 text-center">
                    <h2>Pilih Informasi yang ingin diketahui?!.</h2>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Best Pricing End -->
<!-- Pricing Card Start -->
<div class="pricing-card-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-card text-center mb-30">
                    <div class="card-top">
                        <span>Mutasi Antar OPD</span>
                        <h4>Dalam <span>Instansi</span></h4>
                    </div>
                    <div class="card-bottom">
                        <ul>
                            <!-- <li>Increase traffic 50%</li>
                                    <li>E-mail support</li>
                                    <li>10 Free Optimization</li>
                                    <li>24/7 support</li> -->
                        </ul>
                        <a href="#" class="btn card-btn1">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-card  text-center mb-30">
                    <div class="card-top">
                        <span>Mutasi Antar Instansi</span>
                        <h4>Dalam <span>Provinsi</span></h4>
                    </div>
                    <div class="card-bottom">
                        <ul>
                            <!-- <li>Increase traffic 50%</li>
                                    <li>E-mail support</li>
                                    <li>10 Free Optimization</li>
                                    <li>24/7 support</li> -->
                        </ul>
                        <a href="#" class="btn card-btn1">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-card text-center mb-30">
                    <div class="card-top">
                        <span>Mutasi Antar Instansi</span>
                        <h4>Luar <span>Provinsi</span></h4>
                    </div>
                    <div class="card-bottom">
                        <ul>
                            <!-- <li>Increase traffic 50%</li>
                                    <li>E-mail support</li>
                                    <li>10 Free Optimization</li>
                                    <li>24/7 support</li> -->
                        </ul>
                        <a href="#" class="btn card-btn1">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-card text-center mb-30">
                    <div class="card-top">
                        <span>x</span>
                        <h4>xx <span>xxx</span></h4>
                    </div>
                    <div class="card-bottom">
                        <ul>
                            <!-- <li>Increase traffic 50%</li>
                                    <li>E-mail support</li>
                                    <li>10 Free Optimization</li>
                                    <li>24/7 support</li> -->
                        </ul>
                        <a href="#" class="btn card-btn1">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-card  text-center mb-30">
                    <div class="card-top">
                        <span>x</span>
                        <h4>xx <span>xxx</span></h4>
                    </div>
                    <div class="card-bottom">
                        <ul>
                            <!-- <li>Increase traffic 50%</li>
                                    <li>E-mail support</li>
                                    <li>10 Free Optimization</li>
                                    <li>24/7 support</li> -->
                        </ul>
                        <a href="#" class="btn card-btn1">Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="single-card text-center mb-30">
                    <div class="card-top">
                        <span>x</span>
                        <h4>xx <span>xxx</span></h4>
                    </div>
                    <div class="card-bottom">
                        <ul>
                            <!-- <li>Increase traffic 50%</li>
                                    <li>E-mail support</li>
                                    <li>10 Free Optimization</li>
                                    <li>24/7 support</li> -->
                        </ul>
                        <a href="#" class="btn card-btn1">Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pricing Card End -->
<!-- Our Customer Start -->
<!-- <div class="available-app-area"> -->
<div id="cs" class="our-customer section-padd-top10 container-fluid" data-background="{{ asset('base/img/gallery/work.jpg') }}">
    <div class="our-customer-wrapper">
        <!-- Section Tittle -->
        <div class="row d-flex justify-content-center">
            <div class="col-xl-8">
                <div class="section-tittle text-center">
                    <h2>Team Pelaksana Pada Proses Mutasi<br> di BKPSDM Pesisir Selatan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="customar-active dot-style d-flex dot-style">
                    <div class="single-customer mb-100">
                        <div class="what-img">
                            <img src="{{ asset('base/img/shape/man1.png') }}" alt="">
                        </div>
                        <div class="what-cap">
                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                            <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                        </div>
                    </div>

                    <div class="single-customer mb-100">
                        <div class="what-img">
                            <img src="{{ asset('base/img/shape/man2.png') }}" alt="">
                        </div>
                        <div class="what-cap">
                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                            <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                        </div>
                    </div>

                    <div class="single-customer mb-100">
                        <div class="what-img">
                            <img src="{{ asset('base/img/shape/man3.png') }}" alt="">
                        </div>
                        <div class="what-cap">
                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                            <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                        </div>
                    </div>

                    <div class="single-customer mb-100">
                        <div class="what-img">
                            <img src="{{ asset('base/img/shape/man2.png') }}" alt="">
                        </div>
                        <div class="what-cap">
                            <h4><a href="#">Welcome To The Best Model Winner Contest</a></h4>
                            <p>Utenim ad minim veniam quisnostrud exercitation ullamcolabor nisiut aliquip ex ea commodo consequat duis aute irure dolor in represse.</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
<!-- Our Customer End -->
<!-- Say Something Start -->
<div class="say-something-aera pt-90 pb-90 fix">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="offset-xl-1 offset-lg-1 col-xl-5 col-lg-5">
                <div class="say-something-cap">
                    <h3>Informasi lebih lanjut, <br>hubungi kontak callcenter.</h3>
                </div>
            </div>
            <div class="col-xl-2 col-lg-3">
                <div class="say-btn">
                    <a href="#" class="btn radius-btn">call center</a>
                </div>
            </div>
        </div>
    </div>
    <!-- shape -->
    <div class="say-shape">
        <img src="{{ asset('base/img/shape/say-shape-left.png') }}" alt="" class="say-shape1 rotateme d-none d-xl-block">
        <img src="{{ asset('base/img/shape/say-shape-right.png') }}" alt="" class="say-shape2 d-none d-lg-block">
    </div>
</div>
<!-- Say Something End -->
@endsection
