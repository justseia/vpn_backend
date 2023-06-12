@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h2 class="breadcrumb-title">About Us</h2>
                <ul class="breadcrumb-menu">
                    <li>
                        <a href="{{ route('home.index') }}"><i class="far fa-home"></i> Home</a>
                    </li>
                    <li class="active">About Us</li>
                </ul>
            </div>
        </div>

        <div class="about-area py-120">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-left">
                            <div class="about-img">
                                <img src="{{ asset('assets/img/about/01.png') }}" alt />
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
                            <a href="#" class="theme-btn">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="counter-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon"><i class="flaticon-support"></i></div>
                            <span class="counter" data-count="+" data-to="500" data-speed="3000">500</span>
                            <h6 class="title">+ Total Support</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon"><i class="flaticon-happy"></i></div>
                            <span class="counter" data-count="+" data-to="250" data-speed="3000">250</span>
                            <h6 class="title">+ Satisfied Clients</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon"><i class="flaticon-achievement"></i></div>
                            <span class="counter" data-count="+" data-to="120" data-speed="3000">120</span>
                            <h6 class="title">+ Active Experts</h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="counter-box">
                            <div class="icon"><i class="flaticon-trophy"></i></div>
                            <span class="counter" data-count="+" data-to="300" data-speed="3000">300</span>
                            <h6 class="title">+ Win Awards</h6>
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
                                <img src="{{ asset('assets/img/testimonial/01.jpg') }}" alt />
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
                                <img src="{{ asset('assets/img/testimonial/02.jpg') }}" alt />
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
                                <img src="{{ asset('assets/img/testimonial/03.jpg') }}" alt />
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
                                <img src="{{ asset('assets/img/testimonial/04.jpg') }}" alt />
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

        <div class="team-area pt-120">
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
                            <img src="{{ asset('assets/img/team/01.jpg') }}" alt="thumb" />
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
                            <img src="{{ asset('assets/img/team/02.jpg') }}" alt="thumb" />
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
                            <img src="{{ asset('assets/img/team/03.jpg') }}" alt="thumb" />
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
                            <img src="{{ asset('assets/img/team/04.jpg') }}" alt="thumb" />
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

        <div class="partner-area pt-70 pb-70">
            <div class="container">
                <div class="partner-wrapper partner-slider owl-carousel owl-theme">
                    <img src="{{ asset('assets/img/partner/01.png') }}" alt="thumb" />
                    <img src="{{ asset('assets/img/partner/02.png') }}" alt="thumb" />
                    <img src="{{ asset('assets/img/partner/03.png') }}" alt="thumb" />
                    <img src="{{ asset('assets/img/partner/04.png') }}" alt="thumb" />
                    <img src="{{ asset('assets/img/partner/05.png') }}" alt="thumb" />
                    <img src="{{ asset('assets/img/partner/06.png') }}" alt="thumb" />
                </div>
            </div>
        </div>
    </main>
@endsection
