@extends('layouts.app')

@section('title', '103400.com 技术学习IN')

@section('content')
    <div class="row">
        <div id="blog-entry" class="blog-entry section col-md-8 col-12">
            <article class="post">
                <h3 class="title">{{ $data->title }}</h3>
                <div class="meta">
                    <ul class="meta-list list-inline">
                        <li class="list-inline-item post-time post_date date updated">分享时间 2017-10-03</li>
                        <li class="list-inline-item post-author"> 作者 <a href="#" class="text-info">小小鸟</a></li>
                        <li class="list-inline-item post-author"> 来源 <a href="#" class="text-info">技术架构</a></li>
                        <li class="list-inline-item post-author"> 阅读量 90次</li>
                        {{--<li class="list-inline-item post-comments-link">
                            <a href="#comment-area"><i class="fa fa-comments"></i>8 Comments</a>
                        </li>--}}
                    </ul><!--//meta-list-->
                </div><!--meta-->
                <div class="post-thumb">
                    <img class="img-fluid" src="assets/images/posts/post-1.jpg" alt="">
                </div><!--//post-thumb-->
                <div class="content">
                    {!! $data->content !!}
                </div>
                <nav class="post-nav">
                    <span class="nav-previous"><a href="#" rel="prev"><i class="fa fa-long-arrow-left"></i>上一篇</a></span>
                    <span class="nav-next"><a href="#" rel="next">下一篇<i class="fa fa-long-arrow-right"></i></a></span>
                </nav>


            </article>
        </div>

        <aside id="blog-sidebar" class="blog-sidebar col-lg-3 col-md-4 col-12 ml-md-auto">
            <section class="widget categories">
                <h3 class="title">架构</h3>
                <ul class="list-unstyled">
                    <li><a href="#">News</a></li>
                    <li><a href="#">Stories</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </section>
            <section class="widget archives">
                <h3 class="title">编程语言</h3>
                <ul class="list-unstyled">
                    <li><a href="#">June 2014 <span class="count">(3)</span></a></li>
                    <li><a href="#">May 2014 <span class="count">(5)</span></a></li>
                    <li><a href="#">April 2014 <span class="count">(4)</span></a></li>
                    <li><a href="#">March 2014 <span class="count">(2)</span></a></li>
                </ul>
            </section>

        </aside>
    </div>

@endsection
