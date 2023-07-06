@extends('layouts.app')

@section('title', 'Speakers')

@section('content')

    <style>
        .placeholder {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0;
            background: #fff;
        }

        .loading {
            width: 100%;
            height: 100px;
            /* background: #fff; */
            /* z-index: 9999; */
        }

        .loading-text {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            margin: auto;
            text-align: center;
            width: 100%;
            height: 100px;
            line-height: 100px;
            font-size: 20px;
        }

        .loading-text span {
            display: inline-block;
            margin: 0 5px;
            color: #d70303;
            font-family: 'Quattrocento Sans', sans-serif;
        }

        .loading-text span:nth-child(1) {
            filter: blur(0px);
            animation: blur-text 1.5s 0s infinite linear alternate;
        }

        .loading-text span:nth-child(2) {
            filter: blur(0px);
            animation: blur-text 1.5s 0.2s infinite linear alternate;
        }

        .loading-text span:nth-child(3) {
            filter: blur(0px);
            animation: blur-text 1.5s 0.4s infinite linear alternate;
        }

        .loading-text span:nth-child(4) {
            filter: blur(0px);
            animation: blur-text 1.5s 0.6s infinite linear alternate;
        }

        .loading-text span:nth-child(5) {
            filter: blur(0px);
            animation: blur-text 1.5s 0.8s infinite linear alternate;
        }

        .loading-text span:nth-child(6) {
            filter: blur(0px);
            animation: blur-text 1.5s 1s infinite linear alternate;
        }

        .loading-text span:nth-child(7) {
            filter: blur(0px);
            animation: blur-text 1.5s 1.2s infinite linear alternate;
        }

        .loading-text span:nth-child(8) {
            filter: blur(0px);
            animation: blur-text 1.5s 1.4s infinite linear alternate;
        }

        .loading-text span:nth-child(9) {
            filter: blur(0px);
            animation: blur-text 1.5s 1.6s infinite linear alternate;
        }

        .loading-text span:nth-child(10) {
            filter: blur(0px);
            animation: blur-text 1.5s 1.8s infinite linear alternate;
        }

        .loading-text span:nth-child(11) {
            filter: blur(0px);
            animation: blur-text 1.5s 2s infinite linear alternate;
        }

        .loading-text span:nth-child(12) {
            filter: blur(0px);
            animation: blur-text 1.5s 2.2s infinite linear alternate;
        }

        @keyframes blur-text {
            0% {
                filter: blur(0px);
            }

            100% {
                filter: blur(2px);
            }
        }
    </style>
    <div class="section exvent-hero-section d-lg-flex d-block align-items-center inner-page-hero" style="background-image: url(assets/images/bg/about_page_bg.jpg);">
        <img class="shape-1 img-fluid" src="assets/images/shape/hero_shape1.png" alt="">
        <img class="shape-2 img-fluid" src="assets/images/shape/hero_shape2.png" alt="">

        <div class="container">
            <div class="row exvent-hero-row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="page-title">
                        <h2 class="section-title">Speakers</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="speaker-section-3 section-padding-04">
        <div class="container">
            {{-- <div class="row">
                <div class="col-12">
                    <div class="section-title-wrap">
                        <div class="section-title text-center">
                            <h5 class="sub-title orange">Speakers</h5>
                            <h2 class="title">Coming Soon</h2>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="row gy-5 justify-content-center">
                @forelse ($speakers as $speaker)
                    <div class="col-lg-3 col-md-6 speaker-col">
                        <div class="single-speaker">
                            <a href="speaker-single.html" class="speaker-thumbnail">
                                <img src="assets/images/speaker/speaker_rounded_1.jpg" alt="Speaker 1" class="speaker-img">
                            </a>
                            <div class="speaker-details">
                                <div class="heading-shape">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="202" height="84" viewBox="0 0 202 84">
                                        <image data-name="Shape 29" width="202" height="84" xlink:href="data:img/png;base64,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"></image>
                                    </svg>
                                </div>
                                <a href="speaker-single.html" class="speaker-name-link">
                                    <h4 class="speaker-name">{{ $speaker->name }}</h4>
                                </a>
                                <p class="speaker-designation">Career Expert</p>
                            </div>
                        </div>
                    </div>
                @empty

                <div class="placeholder">
                    <div class="loading">
                        <div class="loading-text">
                            <span class="loading-text-words">C</span>
                            <span class="loading-text-words">O</span>
                            <span class="loading-text-words">M</span>
                            <span class="loading-text-words">I</span>
                            <span class="loading-text-words">N</span>
                            <span class="loading-text-words">G</span>
                            <span class="loading-text-words"> </span>
                            <span class="loading-text-words">S</span>
                            <span class="loading-text-words">O</span>
                            <span class="loading-text-words">O</span>
                            <span class="loading-text-words">N</span>
                            <span class="loading-text-words">.</span>
                            <span class="loading-text-words">.</span>
                            <span class="loading-text-words">.</span>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
        </div>
    </div>


@endsection
