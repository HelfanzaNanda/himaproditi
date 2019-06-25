<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 04/05/2019
 * Time: 8:04
 */
?>

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ummet Event - Home</title>
    <link rel="icon" href="img/Fevicon.png" type="image/png">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/simple-line-icons.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins/font-awesome.min.css') }}"/>
    <link rel="stylesheet" href="{{asset('user-assets/vendors/flat-icon/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/vendors/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/vendors/fontawesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/vendors/themify-icons/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/vendors/linericon/style.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/vendors/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/vendors/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('user-assets/css/style.css')}}">
</head>
<body>

<!--================ Header Menu Area start =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container box_1620">
                <a class="navbar-brand logo_h" href="#"><img src="{{asset('user-assets/img/logo.png')}}" alt=""></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav justify-content-end">
                        <li class="nav-item active"><a class="nav-link" href="{{route('user.home')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('user.about')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('user.anggota')}}">Anggota</a></li>
                        @if(Auth::guard('anggota')->check())
                            <li class="nav-item"><a class="nav-link" href="{{route('user.rapat')}}">Rapat</a></li>
                        @endif
                        <li class="nav-item"><a class="nav-link" href="{{route('user.news')}}">News</a></li>
                    </ul>

                    @if(Auth::guard('anggota')->check())
                        <ul class="nav-right text-center text-lg-right py-4 py-lg-0">
                            <li><p style="color: black">{{ Auth::user()->nama }}</p></li>
                        </ul>
                    @else
                        <ul class="nav-right text-center text-lg-right py-4 py-lg-0">
                            <li><a href="{{route('anggota.login')}}">Login</a></li>
                        </ul>
                    @endif

                    @if(Auth::guard('anggota')->check())
                        <ul class="nav-right text-lg-right">
                            <li><a href="{{route('anggota.logout')}}">Logout</a></li>
                        </ul>
                    @endif
                </div>
            </div>
        </nav>
    </div>
</header>
<!--================Header Menu Area =================-->


<!--================Hero Banner Area Start =================-->
<section class="hero-banner">
    <div class="container text-center">
        {{--<span class="hero-banner-icon"><i class="flaticon-sing"></i></span>--}}

        <h1>HIMAPRODI TI</h1>
        {{--<a class="button button-header" href="#">Buy Ticket</a>--}}
    </div>
</section>
<!--================Hero Banner Area End =================-->

@yield('user')

<!-- ================ start footer Area ================= -->
<footer class="footer-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-3  col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>About HIMAPRODI TI</h6>
                    <p>
                        The world has become so fast paced that people don’t want to stand by reading a page of
                        information to be they would much rather look at a presentation and understand the message. It
                        has come to a point where images and videos are used more to
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="single-footer-widget">
                    <h6>Navigation Links</h6>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#">Feature</a></li>
                                <li><a href="#">Services</a></li>
                                <li><a href="#">Portfolio</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li><a href="#">Team</a></li>
                                <li><a href="#">Pricing</a></li>
                                <li><a href="#">Blog</a></li>
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row align-items-center">
                <p class="col-lg-8 col-sm-12 footer-text m-0 text-center text-lg-left">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script>
                    All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by
                    <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                <div class="col-lg-4 col-sm-12 footer-social text-center text-lg-right">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- ================ End footer Area ================= -->


<script src="{{asset('user-assets/vendors/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('user-assets/vendors/bootstrap/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('user-assets/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
<script src="{{asset('user-assets/vendors/Magnific-Popup/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('user-assets/js/jquery.ajaxchimp.min.js')}}"></script>
<script src="{{asset('user-assets/js/mail-script.js')}}"></script>
<script src="{{asset('user-assets/js/countdown.js')}}"></script>
<script src="{{asset('user-assets/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('user-assets/js/main.js')}}"></script>


</body>
</html>
