@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h2 class="breadcrumb-title">Pricing Plan</h2>
                <ul class="breadcrumb-menu">
                    <li>
                        <a href="{{ route('home.index') }}"><i class="far fa-home"></i> Home</a>
                    </li>
                    <li class="active">Pricing Plan</li>
                </ul>
            </div>
        </div>

        <div class="pricing-area py-120">
            <div class="container">
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
                                <a href="{{ route('pay.index') }}" class="theme-btn">Get Started</a>
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
                                <a href="{{ route('pay.index') }}" class="theme-btn">Get Started</a>
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
                                <a href="{{ route('pay.index') }}" class="theme-btn">Get Started</a>
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
                                <a href="{{ route('pay.index') }}" class="theme-btn">Get Started</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="pricing-payment">
                    <p>30-Day Money Back Guarantee For New Purchases</p>
                    <img src="assets/img/payment/payment.png" alt />
                </div>
            </div>
        </div>
    </main>
@endsection
