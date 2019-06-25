<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 04/05/2019
 * Time: 8:22
 */
?>


@extends('templates.app')

@section('user')
    <!--================ Sponsor section Start =================-->
    <section class="section-padding--small sponsor-bg">
        <div class="container">

            <div class="section-intro text-center pb-80px">
                <h2 class="primary-text">Apakah Kamu Mau</h2>
                <img src="{{asset('user-assets/img/home/section-style.png')}}" alt="">

            </div>

            <div class="row">
                <div class="sponsor-wrapper mb-5 pb-4">
                    <h3 class="sponsor-title mb-5">Mengenal HIMAPRODI TI Lebih Dekat</h3>

                    <button class="btn btn-outline-primary">MENGENAL HIMAPRODI TI</button>
                </div>

                <div class="sponsor-wrapper mb-5 pb-4">
                    <h3 class="sponsor-title mb-5">Atau Memberikan Kritik Atau Saran</h3>

                    <button class="btn btn-outline-primary">KRITIK DAN SARAN</button>
                </div>
            </div>


        </div>
    </section>
    <!--================ Sponsor section End =================-->

    <!--================ Blog section Start =================-->
    <section class="section-margin">
        <div class="container">
            <div class="section-intro text-center pb-98px">
                {{--<p class="section-intro__title">Join the event</p>--}}
                <h2 class="primary-text">Curahkan Isi Hatimu</h2>
                <img src="{{asset('user-assets/img/home/section-style.png')}}" alt="">
            </div>

            <div class="owl-theme owl-carousel blogCarousel pb-xl-1">

                {{--foreach disini--}}

                <div class="card-blog">
                    <div class="blog-body">
                        <a href="#">
                            <h3>Owls should be used to help abused children open <br class="d-none d-xl-block">
                                up in therapy sessions, says charity boss</h3>
                        </a>
                        <ul class="blog-info">
                            <li><a href="#"><i class="icons icon-user"></i>Nama</a></li>
                            <li><a href="#"><i class="icons icon-social-instagram"></i> ig</a></li>
                        </ul>
                    </div>
                </div>

                {{--endforeach disini--}}

            </div>
        </div>
    </section>
    <!--================ Blog section End =================-->
@endsection
