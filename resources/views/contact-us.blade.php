@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<div class="section exvent-hero-section d-lg-flex d-block align-items-center inner-page-hero" style="background-image: url(assets/images/bg/about_page_bg.jpg);">
    <img class="shape-1 img-fluid" src="assets/images/shape/hero_shape1.png" alt="">
    <img class="shape-2 img-fluid" src="assets/images/shape/hero_shape2.png" alt="">

    <div class="container">
        <div class="row exvent-hero-row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="page-title">
                    <h2 class="section-title">Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="contact-form-section section-padding-02">
    <div class="container">
        <div class="row g-5 justify-content-between">
            <div class="col-lg-5">
                <div class="section-title-wrap">
                    <div class="section-title">
                        <h5 class="sub-title orange">Get Information</h5>
                        <h2 class="title">Contact With Us</h2>
                    </div>
                </div>
                <div class="single-contact">
                    <span class="contact-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </span>
                    <div class="contact-info">
                        <h4 class="contact-label">Our Location : </h4>
                        <p class="address">Ozumba Mbadiwe Road, Opposite 1004,<br> Victoria Island 100001, Lagos</p>
                    </div>
                </div>
                <div class="single-contact">
                    <span class="contact-icon orange-color">
                    <i class="flaticon-phone-call"></i>
                </span>
                    <div class="contact-info">
                        <h4 class="contact-label">Phone</h4>
                        <a href="tel:+2347039363184" class="address">+234 7039 363 184</a>
                        <br>
                        <a href="tel:+2349022222226" class="address">+234 9022 222 226</a>
                    </div>
                </div>
                <div class="single-contact">
                    <span class="contact-icon blue-color">
                    <i class="far fa-envelope"></i>
                </span>
                    <div class="contact-info">
                        <h4 class="contact-label">Email :</h4>
                        <a href="mailto:office@insurancemeetstech.com" class="address">office@insurancemeetstech.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="map-section">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126868.53600487554!2d3.2784439972656183!3d6.440031500000017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103bf4d81513cf8f%3A0x3cc9ebc0a31cc055!2sThe%20Civic%20Centre!5e0!3m2!1sen!2sng!4v1688316295999!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-login-footer />
@endsection
