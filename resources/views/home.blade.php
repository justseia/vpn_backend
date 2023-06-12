@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="hero-section">
            <div class="hero-wrapper">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6 col-lg-6">
                            <div class="hero-content">
                                <h6 class="hero-sub-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".25s">Best VPN Service For You</h6>
                                <h1 class="hero-title wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".50s">Fastest VPN and Proxy Solutions You Need</h1>
                                <p class="wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay=".75s">There are many variations of passages available but the majority have suffered alteration in some form by injected humour or randomised words.</p>
                                <div class="hero-btn wow animate__animated animate__fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                                    <a href="#" class="theme-btn">Get 7 Days Trail</a>
                                    <a href="#" class="theme-btn theme-btn2">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="hero-img">
                                <img src="{{ asset('assets/img/slider/hero-1.png') }}" alt/>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hero-shape">
                    <img src="{{ asset('assets/img/shape/shape-1.png') }}" alt/>
                </div>
            </div>
        </div>

        <div class="feature-area pt-120">
            <div class="container">
                <div class="feature-area-wrapper">
                    <div class="row">
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-fast"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Fast And Secure</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item active">
                                <div class="feature-icon">
                                    <i class="flaticon-financial"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>Affordable Pricing</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <div class="feature-item">
                                <div class="feature-icon">
                                    <i class="flaticon-support"></i>
                                </div>
                                <div class="feature-content">
                                    <h5>27/4 Online Support</h5>
                                    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left">
                            <div class="about-img">
                                <img src="{{ asset('assets/img/about/01.png') }}" alt/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-right">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">About Us</span>
                                <h2 class="site-title">We Offer The Fastest & Simplest VPN</h2>
                            </div>
                            <p class="about-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</p>
                            <div class="about-list-wrapper">
                                <ul class="about-list list-unstyled">
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>Take a look at our round up of the best shows</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>It has survived not only five centuries</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="icon"><span class="fas fa-check-circle"></span></div>
                                        <div class="text">
                                            <p>Lorem Ipsum has been the ndustry standard dummy text</p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <a href="about.html" class="theme-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="service-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Services</span>
                            <h2 class="site-title">What We Offer</h2>
                            <div class="heading-divider"></div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-web-development"></i>
                            </div>
                            <h3 class="service-title">
                                <a href="#">Free Service</a>
                            </h3>
                            <p class="service-text">There are many variations of passages available but the majority have suffered.</p>
                            <div class="service-arrow">
                                <a href="#" class="service-read-btn">Learn More<i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item active">
                            <div class="service-icon">
                                <i class="flaticon-server-traffic"></i>
                            </div>
                            <h3 class="service-title">
                                <a href="#">Premium Service</a>
                            </h3>
                            <p class="service-text">There are many variations of passages available but the majority have suffered.</p>
                            <div class="service-arrow">
                                <a href="#" class="service-read-btn">Learn More<i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-project-management"></i>
                            </div>
                            <h3 class="service-title">
                                <a href="#">Gigabit Service</a>
                            </h3>
                            <p class="service-text">There are many variations of passages available but the majority have suffered.</p>
                            <div class="service-arrow">
                                <a href="#" class="service-read-btn">Learn More<i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-web-hosting"></i>
                            </div>
                            <h3 class="service-title">
                                <a href="#">VPN For Business</a>
                            </h3>
                            <p class="service-text">There are many variations of passages available but the majority have suffered.</p>
                            <div class="service-arrow">
                                <a href="#" class="service-read-btn">Learn More<i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-startup"></i>
                            </div>
                            <h3 class="service-title">
                                <a href="#">Stream Service</a>
                            </h3>
                            <p class="service-text">There are many variations of passages available but the majority have suffered.</p>
                            <div class="service-arrow">
                                <a href="#" class="service-read-btn">Learn More<i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="service-item">
                            <div class="service-icon">
                                <i class="flaticon-repair"></i>
                            </div>
                            <h3 class="service-title">
                                <a href="#">VPN For Teams</a>
                            </h3>
                            <p class="service-text">There are many variations of passages available but the majority have suffered.</p>
                            <div class="service-arrow">
                                <a href="#" class="service-read-btn">Learn More<i class="far fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pricing-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Pricing</span>
                            <h2 class="site-title">Pricing Plan</h2>
                            <div class="heading-divider"></div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h5>Basic</h5>
                            </div>
                            <div class="pricing-save">10% Saved</div>
                            <div class="pricing-amount">
                                <strong>$59</strong>
                            </div>
                            <div class="pricing-amount-type">
                                <span>/Yearly</span>
                            </div>
                            <div class="pricing-feature">
                                <ul>
                                    <li><i class="far fa-check"></i> No Logs Policy</li>
                                    <li><i class="far fa-check"></i> Onion Over VPN</li>
                                    <li><i class="far fa-check"></i> Double Encryption</li>
                                    <li><i class="far fa-check"></i> Global Network</li>
                                    <li><i class="far fa-check"></i> 24/7 Support</li>
                                </ul>
                            </div>
                            <div class="pricing-billed">
                                <span><del>$340.50</del> $180.59 Billed</span>
                                <p>Every 1 Years</p>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="theme-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h5>Standard</h5>
                            </div>
                            <div class="pricing-save">10% Saved</div>
                            <div class="pricing-amount">
                                <strong>$110</strong>
                            </div>
                            <div class="pricing-amount-type">
                                <span>/Yearly</span>
                            </div>
                            <div class="pricing-feature">
                                <ul>
                                    <li><i class="far fa-check"></i> No Logs Policy</li>
                                    <li><i class="far fa-check"></i> Onion Over VPN</li>
                                    <li><i class="far fa-check"></i> Double Encryption</li>
                                    <li><i class="far fa-check"></i> Global Network</li>
                                    <li><i class="far fa-check"></i> 24/7 Support</li>
                                </ul>
                            </div>
                            <div class="pricing-billed">
                                <span><del>$340.50</del> $180.59 Billed</span>
                                <p>Every 1 Years</p>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="theme-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing-item">
                            <div class="pricing-ribbon">Popular</div>
                            <div class="pricing-header">
                                <h5>Premium</h5>
                            </div>
                            <div class="pricing-save">10% Saved</div>
                            <div class="pricing-amount">
                                <strong>$156</strong>
                            </div>
                            <div class="pricing-amount-type">
                                <span>/Yearly</span>
                            </div>
                            <div class="pricing-feature">
                                <ul>
                                    <li><i class="far fa-check"></i> No Logs Policy</li>
                                    <li><i class="far fa-check"></i> Onion Over VPN</li>
                                    <li><i class="far fa-check"></i> Double Encryption</li>
                                    <li><i class="far fa-check"></i> Global Network</li>
                                    <li><i class="far fa-check"></i> 24/7 Support</li>
                                </ul>
                            </div>
                            <div class="pricing-billed">
                                <span><del>$340.50</del> $180.59 Billed</span>
                                <p>Every 1 Years</p>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="theme-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="pricing-item">
                            <div class="pricing-header">
                                <h5>Gold</h5>
                            </div>
                            <div class="pricing-save">10% Saved</div>
                            <div class="pricing-amount">
                                <strong>$267</strong>
                            </div>
                            <div class="pricing-amount-type">
                                <span>/Yearly</span>
                            </div>
                            <div class="pricing-feature">
                                <ul>
                                    <li><i class="far fa-check"></i> No Logs Policy</li>
                                    <li><i class="far fa-check"></i> Onion Over VPN</li>
                                    <li><i class="far fa-check"></i> Double Encryption</li>
                                    <li><i class="far fa-check"></i> Global Network</li>
                                    <li><i class="far fa-check"></i> 24/7 Support</li>
                                </ul>
                            </div>
                            <div class="pricing-billed">
                                <span><del>$340.50</del> $180.59 Billed</span>
                                <p>Every 1 Years</p>
                            </div>
                            <div class="pricing-footer">
                                <a href="#" class="theme-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricing-payment">
                    <p>30-Day Money Back Guarantee For New Purchases</p>
                    <img src="{{ asset('assets/img/payment/payment.png') }}" alt/>
                </div>
            </div>
        </div>

        <div class="global-location py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Location</span>
                            <h2 class="site-title text-white">Global Location</h2>
                            <div class="heading-divider"></div>
                            <p class="text-white">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="g-location-map">
                            <img src="{{ asset('assets/img/location/map.svg') }}" alt="map-image"/>
                            <div class="map-item item-1">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>Canada</h5>
                                </div>
                            </div>
                            <div class="map-item item-2">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>Australia</h5>
                                </div>
                            </div>
                            <div class="map-item item-3">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>England</h5>
                                </div>
                            </div>
                            <div class="map-item item-4 active">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>United States</h5>
                                </div>
                            </div>
                            <div class="map-item item-5">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>Russia</h5>
                                </div>
                            </div>
                            <div class="map-item item-6">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>Nigeria</h5>
                                </div>
                            </div>
                            <div class="map-item item-7">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>Finland</h5>
                                </div>
                            </div>
                            <div class="map-item item-8">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>Brazil</h5>
                                </div>
                            </div>
                            <div class="map-item item-9">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>Spain</h5>
                                </div>
                            </div>
                            <div class="map-item item-10">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>Italy</h5>
                                </div>
                            </div>
                            <div class="map-item item-11">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>Quatar</h5>
                                </div>
                            </div>
                            <div class="map-item item-12">
                                <span class="circle-point"></span>
                                <div class="map-popup">
                                    <h5>Ukraine</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="choose-area bg py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="choose-content">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">Why Choose Us</span>
                                <h2 class="site-title my-3">Best VPN And Proxy Service For You</h2>
                            </div>
                            <p class="mb-4">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                            <h5>Ensure Privacy & Security</h5>
                                        </li>
                                        <li>
                                            <h5>Streaming Access & Speed</h5>
                                        </li>
                                        <li>
                                            <h5>Multiple VPN Network</h5>
                                        </li>
                                        <li>
                                            <h5>Expert Support Team</h5>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul>
                                        <li>
                                            <h5>Fully Encrypted Internet</h5>
                                        </li>
                                        <li>
                                            <h5>Block Malicious Content</h5>
                                        </li>
                                        <li>
                                            <h5>Access Restricted Websites</h5>
                                        </li>
                                        <li>
                                            <h5>Money Back Guarantee</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="choose-img">
                            <img src="{{ asset('assets/img/choose/01.png') }}" alt/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="video-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <div class="video-wrapper">
                            <img src="{{ asset('assets/img/video/video.png') }}" alt="Banner Video"/>
                            <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=ckHzmP1evNU">
                                <i class="fas fa-play"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="faq-area pb-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="faq-left">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">Faq's</span>
                                <h2 class="site-title my-3">General frequently asked questions</h2>
                            </div>
                            <p class="about-text">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</p>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                            <a href="#" class="theme-btn mt-5">Ask Question</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <span><i class="far fa-question"></i></span> Do I Need A Business Plan ?
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <span><i class="far fa-question"></i></span> How Long Should A Business Plan Be ?
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <span><i class="far fa-question"></i></span> What Payment Gateway You Support ?
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="cta-area">
            <div class="container">
                <div class="row">
                    <div class="cta-content">
                        <h5>We Offer Quality Service</h5>
                        <h1>Download Your Free 7 Days Trial</h1>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable content <br/>
                            of a page when looking at its layout.
                        </p>
                        <a href="#" class="theme-btn mt-5">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="download-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="download-img">
                            <img src="{{ asset('assets/img/download/01.png') }}" alt/>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="download-content">
                            <div class="site-heading mb-3">
                                <span class="site-title-tagline">Download</span>
                                <h2 class="site-title my-3">Download Your App</h2>
                            </div>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even.</p>
                            <div class="download-now">
                                <h5>Available On:</h5>
                                <a href="#" class="apple-store"><i class="fab fa-apple"></i></a>
                                <a href="#" class="google-play"><i class="fab fa-google-play"></i></a>
                                <a href="#" class="windows"><i class="fab fa-windows"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial-area bg py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Testimonials</span>
                            <h2 class="site-title">What Client Say's</h2>
                            <div class="heading-divider"></div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="testimonial-slider owl-carousel owl-theme">
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fas fa-quote-right"></i></span>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>There are many variations of passages available but the majority have suffered alteration in some form.</p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{ asset('assets/img/testimonial/01.jpg') }}" alt/>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Sylvia H Green</h4>
                                <p>Founder And CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fas fa-quote-right"></i></span>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>There are many variations of passages available but the majority have suffered alteration in some form.</p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{ asset('assets/img/testimonial/02.jpg') }}" alt/>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Gordon D Novak</h4>
                                <p>Founder And CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fas fa-quote-right"></i></span>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>There are many variations of passages available but the majority have suffered alteration in some form.</p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{ asset('assets/img/testimonial/03.jpg') }}" alt/>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Reid E Butt</h4>
                                <p>Founder And CEO</p>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-single">
                        <div class="testimonial-quote">
                            <span class="testimonial-quote-icon"><i class="fas fa-quote-right"></i></span>
                            <div class="testimonial-rate">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                            </div>
                            <p>There are many variations of passages available but the majority have suffered alteration in some form.</p>
                        </div>
                        <div class="testimonial-content">
                            <div class="testimonial-author-img">
                                <img src="{{ asset('assets/img/testimonial/04.jpg') }}" alt/>
                            </div>
                            <div class="testimonial-author-info">
                                <h4>Parker Jimenez</h4>
                                <p>Founder And CEO</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="team-area py-120">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Team</span>
                            <h2 class="site-title">Meet Experts</h2>
                            <div class="heading-divider"></div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <img src="{{ asset('assets/img/team/01.jpg') }}" alt="thumb"/>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Malissa Fierro</a></h5>
                                    <span>Developer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <img src="{{ asset('assets/img/team/02.jpg') }}" alt="thumb"/>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Arron Rodri</a></h5>
                                    <span>Senior Designer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item active">
                            <img src="{{ asset('assets/img/team/03.jpg') }}" alt="thumb"/>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Chad Smith</a></h5>
                                    <span>Digital Marketer</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-3">
                        <div class="team-item">
                            <img src="{{ asset('assets/img/team/04.jpg') }}" alt="thumb"/>
                            <div class="team-social">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin"></i></a>
                            </div>
                            <div class="team-content">
                                <div class="team-bio">
                                    <h5><a href="#">Tony Pinto</a></h5>
                                    <span>CEO & Founder</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="site-heading text-center">
                            <span class="site-title-tagline">Our Blog</span>
                            <h2 class="site-title">News & Blog</h2>
                            <div class="heading-divider"></div>
                            <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="{{ asset('assets/img/blog/01.jpg') }}" alt="Thumb"/>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-calendar-alt"></i> May 10, 2023</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">There are many variates of passages alteration</a>
                                </h4>
                                <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque</p>
                                <a class="theme-btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="{{ asset('assets/img/blog/02.jpg') }}" alt="Thumb"/>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-calendar-alt"></i> May 10, 2023</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">There are many variates of passages alteration</a>
                                </h4>
                                <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque</p>
                                <a class="theme-btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="blog-item">
                            <div class="blog-item-img">
                                <img src="{{ asset('assets/img/blog/03.jpg') }}" alt="Thumb"/>
                            </div>
                            <div class="blog-item-info">
                                <div class="blog-item-meta">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="far fa-calendar-alt"></i> May 10, 2023</a>
                                        </li>
                                    </ul>
                                </div>
                                <h4 class="blog-title">
                                    <a href="#">There are many variates of passages alteration</a>
                                </h4>
                                <p>At vero eos et accusamus et iusto odio ducimus qui blanditiis deleniti atque</p>
                                <a class="theme-btn" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="partner-area pt-70 pb-70">
            <div class="container">
                <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                    <img src="{{ asset('assets/img/partner/01.png') }}" alt="thumb"/>
                    <img src="{{ asset('assets/img/partner/02.png') }}" alt="thumb"/>
                    <img src="{{ asset('assets/img/partner/03.png') }}" alt="thumb"/>
                    <img src="{{ asset('assets/img/partner/04.png') }}" alt="thumb"/>
                    <img src="{{ asset('assets/img/partner/05.png') }}" alt="thumb"/>
                    <img src="{{ asset('assets/img/partner/06.png') }}" alt="thumb"/>
                </div>
            </div>
        </div>
    </main>
@endsection
