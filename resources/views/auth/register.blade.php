@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h2 class="breadcrumb-title">Register</h2>
                <ul class="breadcrumb-menu">
                    <li>
                        <a href="{{ route('home.index') }}"><i class="far fa-home"></i> Home</a>
                    </li>
                    <li class="active">Register</li>
                </ul>
            </div>
        </div>

        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <h3>Register</h3>
                            <p>create your vpnox account</p>
                        </div>
                        <form action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Full Name</label>
                                <input name="name" type="text" class="form-control" placeholder="Your Name"/>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input name="email" type="email" class="form-control" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Your Password"/>
                            </div>
                            <div class="form-check form-group">
                                <input class="form-check-input" type="checkbox" value id="agree"/>
                                <label class="form-check-label" for="agree"> I agree with the <a href="#">Terms Of Service.</a> </label>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn">Register <i class="far fa-paper-plane"></i></button>
                            </div>
                        </form>
                        <div class="login-footer">
                            <p>Already have an account? <a href="{{ route('login') }}">Login.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
