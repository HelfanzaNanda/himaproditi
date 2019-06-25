<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 04/05/2019
 * Time: 15:35
 */
?>

@extends('templates.app')

@section('user')
    <!--================Blog Area =================-->
    <section class="blog_area single-post-area section-margin">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 posts-list">
                    <div class="single-post">
                        <div class="feature-img">
                            <img class="img-fluid" src="{{asset('uploads/proker/'.$newsDetail->filename)}}" alt="">
                        </div>

                        <div class="blog_details">
                            <h2>{{$newsDetail->nama_proker}}</h2>
                            <ul class="blog-info-link mt-3 mb-4">
                                <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                {{--<li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>--}}
                            </ul>
                            <p class="excert">{{$newsDetail->deskrpisi}}</p>
                            <div class="quote-wrapper">
                                <div class="quotes">
                                    MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training.
                                </div>
                            </div>


                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower

                            </p>
                            <p>
                                MCSE boot camps have its supporters and its detractors. Some people do not understand why you should have to spend money on boot camp when you can get the MCSE study materials yourself at a fraction of the camp price. However, who has the willpower to actually sit through a self-imposed MCSE training. who has the willpower to actually
                            </p>
                        </div>
                    </div>

                    <div class="blog-author">
                        <div class="media align-items-center">
                            <img src="img/blog/author.png" alt="">
                            <div class="media-body">
                                <a href="#">
                                    <h4>Harvard milan</h4>
                                </a>
                                <p>Second divided from form fish beast made. Every of seas all gathered use saying you're, he our dominion twon Second divided from</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Recent Post</h3>

                            {{--foreach disini--}}

                            <div class="media post_item">
                                <img src="{{asset('user-assets/img/blog/popular-post/post1.jpg')}}" alt="post">
                                <div class="media-body">
                                    <a href="single-blog.html">
                                        <h3>From life was you fish...</h3>
                                    </a>
                                    <p>January 12, 2019</p>
                                </div>
                            </div>

                            {{--end foreach disini--}}

                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@endsection

