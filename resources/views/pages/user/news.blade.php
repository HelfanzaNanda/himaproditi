<?php
/**
 * Created by PhpStorm.
 * User: Elfan N
 * Date: 04/05/2019
 * Time: 15:26
 */
?>

@extends('templates.app')

@section('user')
    <!--================Blog Area =================-->
    <section class="blog_area section-margin--large">
        <div class="container">
            <div class="section-intro text-center pb-80px">
                <h2 class="primary-text">News</h2>
                <img src="{{asset('user-assets/img/home/section-style.png')}}" alt="">
            </div>
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="blog_left_sidebar">

                        {{--foreach disini--}}
                        @foreach($news as $news)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <a href="{{route('user.news-detail', $news->slug)}}">
                                        <img class="card-img rounded-0"
                                             src="{{asset('uploads/proker/'.$news->filename)}}" height="300">
                                    </a>
                                    <a href="{{route('user.news-detail', $news->id)}}" class="blog_item_date">
                                        <h3>{{substr($news->created_at, 8, 2)}}</h3>
                                        @if(substr($news->created_at, 5, 2) == '07')
                                            <p>Juli</p>
                                        @endif

                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{route('user.news-detail', $news->id)}}">
                                        <h2>{{$news->nama_proker}}</h2>
                                    </a>
                                    <p>{{str_limit($news->deskripsi, 80)}}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="far fa-user"></i> Travel, Lifestyle</a></li>
                                        {{--<li><a href="#"><i class="far fa-comments"></i> 03 Comments</a></li>--}}
                                    </ul>
                                </div>
                            </article>

                        @endforeach
                        {{--end foreach disini--}}

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                      <span aria-hidden="true">
                                          <span class="lnr lnr-chevron-left"></span>
                                      </span>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                      <span aria-hidden="true">
                                          <span class="lnr lnr-chevron-right"></span>
                                      </span>
                                    </a>
                                </li>
                            </ul>
                        </nav>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                        {{--search--}}

                        {{--<aside class="single_sidebar_widget search_widget">
                            <form action="#">
                                <div class="form-group">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="Search Keyword">
                                        <div class="input-group-append">
                                            <button class="btn" type="button"><i class="ti-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100" type="submit">Search</button>
                            </form>
                        </aside>--}}

                        {{--end search--}}
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
