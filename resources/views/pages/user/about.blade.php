<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 04/05/2019
 * Time: 8:33
 */
?>

@extends('templates.app')

@section('user')
    <!--================ Visi Misi v1 section Start =================-->
    <section class="section-padding--small bg-gray">
        <div class="container">
            <div class="section-intro text-center pb-98px">
                <h2 class="primary-text">About</h2>
                <img src="{{asset('user-assets/img/home/section-style.png')}}" alt="">
            </div>
            <div class="row">
                <div class="col-lg-6 align-self-center mb-5 mb-lg-0">
                    <div class="innovative-wrapper">
                        <h3 class="primary-text">Sistem HIMAPRODI TI</h3>
                        <p>
                            Morning steas great earth for divide our good sixth called abunda itseld appear fisrd seaton
                            upon above may bearing all moveth morning make subdue stars they are a goreat eart divide
                            our good sixth one of that
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 pl-xl-5">

                    {{--<ul class="clockdiv text-center" id="clockdiv">
                        <li class="clockdiv-single clockdiv-day">
                            <h1 class="days">320</h1>
                            <span class="smalltext">Days</span>
                        </li>
                        <li class="clockdiv-single clockdiv-hour">
                            <h1 class="hours">30</h1>
                            <span class="smalltext">Hours</span>
                        </li>
                        <li class="clockdiv-single clockdiv-minute">
                            <h1 class="minutes">30</h1>
                            <span class="smalltext">Mins</span>
                        </li>
                    </ul>--}}
                </div>
            </div>
        </div>
    </section>
    <!--================ Visi Misi v1 section End =================-->

    <!--================ Visi Misi v2 section Start =================-->
    <section class="section-margin">
        <div class="container">
            <div class="section-intro text-center pb-98px">
                <p class="section-intro__title">Visi, Misi dan Tujuan</p>
                {{--<h2 class="primary-text">Why Join Ummet</h2>--}}
                <img src="{{asset('user-assets/img/home/section-style.png')}}" alt="">
            </div>


            <div class="d-lg-flex justify-content-between">
                <div class="card-feature mb-5 mb-lg-0">
                    <h3>Visi</h3>
                    <p>His likeness beast moved domini moved above meat all fly blessed greater creepeth you itself
                        living room </p>
                </div>

                <div class="card-feature mb-5 mb-lg-0">
                    <h3>Misi</h3>
                    <p>His likeness beast moved domini moved above meat all fly blessed greater creepeth you itself
                        living room </p>
                </div>

                <div class="card-feature mb-5 mb-lg-0">
                    <h3>Tujuan</h3>
                    <p>His likeness beast moved domini moved above meat all fly blessed greater creepeth you itself
                        living room </p>
                </div>
            </div>
        </div>
    </section>
    <!--================ Visi Misi v2 section End =================-->
@endsection

