@extends('layouts.app')

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
                <div class="page-navigation">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><a href="contact.html">Contact Us</a></li>
                        </ol>
                    </nav>
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
                        <p class="address">925 4th Ave #2300, Seattle,<br> WA 98104, United States of <br> America</p>
                    </div>
                </div>
                <div class="single-contact">
                    <span class="contact-icon orange-color">
                    <i class="flaticon-phone-call"></i>
                </span>
                    <div class="contact-info">
                        <h4 class="contact-label">24/7 Hotline</h4>
                        <a href="tel:+4581236572324" class="address">+458 123 657 2324</a>
                    </div>
                </div>
                <div class="single-contact">
                    <span class="contact-icon blue-color">
                    <i class="far fa-envelope"></i>
                </span>
                    <div class="contact-info">
                        <h4 class="contact-label">Email :</h4>
                        <a href="mailto:exvent.hot@gmail.com" class="address">exvent.hot@gmail.com</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="map-section">
                    <div class="map">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2690.050470195108!2d-122.33544524845432!3d47.60570829593006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54906ab11ece62e1%3A0x505ca4dd7ac12cfa!2s925%204th%20Ave%20%232300%2C%20Seattle%2C%20WA%2098104%2C%20USA!5e0!3m2!1sen!2sbd!4v1669805610005!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact Form Start -->
        
        <!-- Contact Form End -->
    </div>
</div>
@endsection
