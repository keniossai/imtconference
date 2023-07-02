
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
                            <h2 class="section-title">Why Attend</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero End -->

        <!-- About Area Start -->
        <div class="about-section about-page section-padding-03" style="background: #f1f3ff;">

            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title mt-5">
                            {{-- <h5 class="sub-title orange">Turning potential into reality</h5> --}}
                            <h2 class="title">Why Attend <br> Insurance Meets Tech 2.0</h2>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="about-right-content">
                            <div class="section-paragraph">
                                <h5 class="sub-title orange">Turning potential into reality</h5>
                                <p>Africa boasts a multi-billion-dollar Insurance Industry with the potential
                                     to reach $68 Billion in GWP if we collectively optimise resources, and unlock
                                      new strategies in deepening penetration and customer engagement.
                                </p>
                                <p>Join us for the highly anticipated Insurance Meets Tech 2.0, the premier trade show that is steadily turning the corner in Nigeria’s insurance and Insurtech space!</p>
                            </div>
                            <div class="about-btn">
                                <a class="btn btn-orange" href="{{ route('register') }}">Register now</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row g-0 mt-5">
                    <div class="col-lg-7 order-lg-1 order-2">
                        <div class="about-thumb-wrap">
                            <img src="assets/images/about_page_img.jpg" alt="about_img1">

                        </div>
                    </div>
                    <div class="col-lg-5 order-lg-1 order-1">
                        <div class="about-content-wrap">
                            <img src="assets/images/shape/about_content_shape1.png" alt="shape" class="about-box-shape">
                            <img src="assets/images/shape/about_shape1.png" alt="shape x" class="about-shape-x">
                            <div class="section-title">
                                <h5 class="sub-title orange">Why attend event</h5>
                                <h2 class="title">Great opportunity to develop you</h2>
                            </div>
                            <div class="about-item">
                                <img src="assets/images/about_icon_1.png" alt="Thumb" class="icon">
                                <div class="about-item-content">
                                    <h5 class="item-heading">3 Days Workshops</h5>
                                    <p class="item-description">We’re inviting the top creatives in the tech industry from all over the world .</p>
                                </div>
                            </div>
                            <div class="about-item">
                                <img src="assets/images/about_icon_2.png" alt="Thumb" class="icon">
                                <div class="about-item-content">
                                    <h5 class="item-heading">3 Days Workshops</h5>
                                    <p class="item-description">We’re inviting the top creatives in the tech industry from all over the world .</p>
                                </div>
                            </div>
                            <div class="about-item">
                                <img src="assets/images/about_icon_3.png" alt="Thumb" class="icon">
                                <div class="about-item-content">
                                    <h5 class="item-heading">3 Days Workshops</h5>
                                    <p class="item-description">We’re inviting the top creatives in the tech industry from all over the world .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="faq-area section-padding-06">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-8">
                                <div class="accordion accordion-flush" id="faq_accordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="accordion_1">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                Explore the Power of Innovation in the Insurtech and Insurance sub-sectors
                                            </button>
                                        </h2>
                                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="accordion_1" data-bs-parent="#faq_accordion" style="">
                                            <div class="accordion-body">
                                                <p>At IMT 2.0, you are set to discover the latest trends, breakthroughs, and innovations that are shaping the
                                                    future of the industry. Witness firsthand how disruptive technologies like artificial intelligence, blockchain,
                                                    and IoT are transforming insurance as we know it. Get inspired by thought leaders and visionaries who are driving change,
                                                    and learn how you can harness these advancements to stay ahead of the curve.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="accordion_2">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Unparalleled Networking Opportunities
                                            </button>
                                        </h2>
                                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="accordion_2" data-bs-parent="#faq_accordion">
                                            <div class="accordion-body">
                                                <p>Connect with a diverse community of insurance C-suites, professionals, tech enthusiasts, sector decision-makers, policymakers, regulators, and industry influencers from around the region. It’s the full stakeholder chain, friends!</p>
                                                <p>Insurance Meets Tech 2.0 provides an unmatched platform to forge valuable connections, exchange ideas, and foster collaborations that will propel your career or business to new heights. </p>
                                                <p>Engage in lively discussions, share your insights, and build relationships with like-minded individuals who share your passion for innovation.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="accordion_3">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Engaging Keynote Presentations
                                            </button>
                                        </h2>
                                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="accordion_3" data-bs-parent="#faq_accordion">
                                            <div class="accordion-body">
                                                <p>Join a lineup of world-class speakers, renowned experts, and thought-provoking visionaries on the IMT 2.0 stage! Gain exclusive insights into emerging technologies, industry trends, and transformative strategies that are reshaping the insurance landscape. </p>
                                                <p>Discover the latest breakthroughs, success stories, and best practices from leading organisations at the forefront of the insurance technology revolution. Prepare to be inspired, motivated, and armed with the knowledge to drive meaningful change within your own organisation. All these and more at IMT 2.0!</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="accordion_4">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                Cutting-Edge Exhibits and Demonstrations
                                            </button>
                                        </h2>
                                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="accordion_4" data-bs-parent="#faq_accordion">
                                            <div class="accordion-body">
                                                <p>Step into the vibrant IMT exhibition arena, buzzing with activity and brimming with the latest advancements in insurtech. Immerse yourself in hands-on demonstrations of groundbreaking solutions that are revolutionising the way insurance is underwritten, sold, and serviced. Interact with industry-leading vendors and solution providers, and gain firsthand experience with state-of-the-art products and services that can optimise your operations, enhance customer experience, and boost your bottom line.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->
        <x-login-footer />
@endsection
