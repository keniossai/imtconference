@extends('layouts.app')

@section('content')
<div class="section exvent-hero-section d-lg-flex d-block align-items-center inner-page-hero" style="background-image: url(assets/images/bg/about_page_bg.jpg);">
    <img class="shape-1 img-fluid" src="{{ asset('assets/images/shape/hero_shape1.png') }}" alt="">
    <img class="shape-2 img-fluid" src="{{ asset('assets/images/shape/hero_shape2.png') }}" alt="">
    <div class="container">
        <div class="row exvent-hero-row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="page-title">
                    <h5 class="section-title" style="font-size: 30px;">{{ $post->title }}</h5>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="blog-list-page single-blog-page section-padding-04">
    <div class="container">
        <div class="row justify-content-between gx-5">
            <div class="col-lg-12">
                <div class="single-blog">
                    <div class="blog-header">
                        <div class="blog-thumbnail">
                            <a href="#" class="">
                                <img src="{{ asset("posts/$post->image") }}" alt="Blog Image" class="blog-img">
                            </a>
                        </div>
                    </div>
                    <div class="blog-body">
                        <h4 class="blog-title">{{ $post->title }}</h4>
                        <p class="blog-content">{{ $post->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
