@extends('layouts.app')

@section('title', 'About')

@section('content')
<!-- Hero Start -->
<div class="section exvent-hero-section d-lg-flex d-block align-items-center inner-page-hero" style="background-image: url(assets/images/bg/about_page_bg.jpg);">
    <img class="shape-1 img-fluid" src="assets/images/shape/hero_shape1.png" alt="">
    <img class="shape-2 img-fluid" src="assets/images/shape/hero_shape2.png" alt="">

    <div class="container">
        <div class="row exvent-hero-row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="page-title">
                    <h2 class="section-title">About Organisers</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->
<div class="about-section about-page section-padding-03" style="background: #f1f3ff;">
    <div class="row g-0 mt-5">
        <div class="col-lg-7 order-lg-1 order-2">
            <div class="about-thumb-wrap">
                <img src="https://www.modioncommunications.com/storage/post/1631137995.jpg" alt="about_img1">

            </div>
        </div>
        <div class="col-lg-5 order-lg-1 order-1">
            <div class="about-content-wrap">
                <img src="assets/images/shape/about_content_shape1.png" alt="shape" class="about-box-shape">
                <img src="assets/images/shape/about_shape1.png" alt="shape x" class="about-shape-x">
                <div class="section-title">
                    <h5 class="sub-title orange">Modion Communications</h5>
                    <h2 class="title">Nigeria's leading boutique PR and marketing communications agency.</h2>
                </div>
                <p>
                    Modion Communications is focused on providing public relations, brand development,
                    marketing activations, media engagement, crisis communications, financial PR, investors’
                    relation Support, event management, digital marketing and media publishing.
                    </p>
                    <br>
                    <p>
                    Based in Lagos, Nigeria, we envision an African dominance through superior,
                    innovative, creative, cutting-edge communications solutions to individuals,
                    small businesses, large corporates, industries and government agencies.
                    </p>
                    <div class="about-item mt-4">
                    <img src="assets/images/about_icon_2.png" alt="Thumb" class="icon">
                    <div class="about-item-content">
                        <h5 class="item-heading">Contact Us</h5>
                        <p class="item-description"><strong>Phone:</strong> +2349022222226</p>
                        <p class="item-description"><strong>Email: </strong> enquiry@modioncommunications.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-login-footer />
@endsection
