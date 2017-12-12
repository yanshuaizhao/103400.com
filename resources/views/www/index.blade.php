@extends('layouts.app')

@section('title', '103400.com 技术干货、技术文章、编程书籍')

@section('content')
    <div class="row" style="margin-bottom: 50px">
        <div id="blog-list" class="blog-list section col-md-8 col-12">
            @foreach($list as $k=>$v)
                <div class="blog-title-wrap">
                    <span><a href="/article/{{$v->id}}" style="color:#333;margin: 1px 0 4px;display: inherit;font-size: 18px;font-weight: 700;line-height: 1.5;" class="blog-title ">{{$v->title}}</a></span>
                    <p class="abstract">{!! $v->introduction !!}</p>
                    <ul class="post-meta list-unstyled list-inline">
                        <li>
                            <i class="fa fa-user"></i>
                            <a href="#">Yomail</a>
                        </li>
                        <li>
                            <i class="fa fa-clock-o"></i>
                            {{date('Y-m-d H:i', $v->ctime)}}
                        </li>
                        <li>
                            <i class="fa fa-eye"></i>
                            {{ $v->browse_num }}
                        </li>
                    </ul>
                </div>

                    {{--<div class="post-entry">
                        {{$v->introduction}}
                    </div>--}}
            @endforeach

        </div>

        {{--<aside id="blog-sidebar" class="blog-sidebar col-lg-3 col-md-4 col-12 ml-md-auto">
            <section class="widget categories">
                <h3 class="title">相关文章</h3>
                <ul class="list-unstyled">
                    <li><a href="#">News</a></li>
                    <li><a href="#">Stories</a></li>
                    <li><a href="#">Technology</a></li>
                    <li><a href="#">Business</a></li>
                </ul>
            </section>
            <section class="widget archives">
                <h3 class="title">最新文章</h3>
                <ul class="list-unstyled">
                    <li><a href="#">June 2014 <span class="count">(3)</span></a></li>
                    <li><a href="#">May 2014 <span class="count">(5)</span></a></li>
                    <li><a href="#">April 2014 <span class="count">(4)</span></a></li>
                    <li><a href="#">March 2014 <span class="count">(2)</span></a></li>
                </ul>
            </section>
            <section class="widget archives">
                <h3 class="title">浏览最多</h3>
                <ul class="list-unstyled">
                    <li><a href="#">June 2014 <span class="count">(3)</span></a></li>
                    <li><a href="#">May 2014 <span class="count">(5)</span></a></li>
                    <li><a href="#">April 2014 <span class="count">(4)</span></a></li>
                    <li><a href="#">March 2014 <span class="count">(2)</span></a></li>
                </ul>
            </section>

        </aside>--}}
    </div>

@endsection
