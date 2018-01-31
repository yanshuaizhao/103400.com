@extends('layouts.app')

@section('title', 'IT界名言 - 103400.com')

@section('content')
    <div class="row" style="margin-bottom: 50px">
        <div id="blog-list" class="blog-list section col-md-8 col-12">
            @foreach($list as $k=>$v)
                <div class="blog-title-wrap">
                    <span><a href="#" style="color:#333;margin: 1px 0 4px;display: inherit;font-size: 18px;font-weight: 700;line-height: 1.5;" class="blog-title ">{{$v['title']}}</a></span>
                </div>
            @endforeach
        </div>

    </div>

@endsection
