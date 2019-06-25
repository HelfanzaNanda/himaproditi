<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 04/05/2019
 * Time: 15:47
 */

?>

@extends('templates.app')

@section('user')
    <!--================ Schedule section Start =================-->
    <section class="section-margin mb-5 pb-5">
        <div class="container">
            <div class="section-intro text-center pb-98px">
                <h2 class="primary-text">Jadwal Rapat</h2>
                <img src="{{asset('user-assets/img/home/section-style.png')}}" alt="">
            </div>

            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="scheduleTab">
                        <ul class="nav nav-tabs">
                            <li class="nav-item text-center">
                                <a data-toggle="tab" href="#day1">
                                    <h4>Day 1</h4>
                                    <p>23 jan, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a class="active" data-toggle="tab" href="#day2">
                                    <h4>Day 2</h4>
                                    <p>23 jan, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a data-toggle="tab" href="#day3">
                                    <h4>Day 2</h4>
                                    <p>23 jan, 2019</p>
                                </a>
                            </li>
                            <li class="nav-item text-center">
                                <a data-toggle="tab" href="#day4">
                                    <h4>Day 2</h4>
                                    <p>23 jan, 2019</p>
                                </a>
                            </li>
                        </ul>

                        <!-- Tab panes -->
                        <div class="tab-content">

                            <div id="day1" class="tab-pane">

                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="{{asset('user-assets/img/testimonial/testimonial1.png')}}" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div id="day2" class="tab-pane active">

                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="img/testimonial/testimonial3.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="img/testimonial/testimonial1.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="img/testimonial/testimonial2.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div id="day3" class="tab-pane">
                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="img/testimonial/testimonial3.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="img/testimonial/testimonial1.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="img/testimonial/testimonial2.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="day4" class="tab-pane">
                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="img/testimonial/testimonial3.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="img/testimonial/testimonial1.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="img/testimonial/testimonial2.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="schedule-card">
                                    <div class="row no-gutters">
                                        <div class="col-md-3">
                                            <div class="card-identity">
                                                <img src="img/testimonial/testimonial3.png" alt="">
                                                <h3>Adam Jamsmith</h3>
                                                <p>UX/UI Designer</p>
                                            </div>
                                        </div>
                                        <div class="col-md-9 align-self-center">
                                            <div class="schedule-content">
                                                <p class="schedule-date">9.00 AM - 10.30 AM</p>
                                                <a class="schedule-title" href="#">
                                                    <h3>Previous Year achivement</h3>
                                                </a>
                                                <p>And wherein Beginning of you cattle fly had was deep wherein darkness behold male called evening gathering moving bring fifth days he lights dry cattle you open seas midst let and in wherein beginning </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================ Schedule section End =================-->
@endsection
