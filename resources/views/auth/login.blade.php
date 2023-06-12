@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h2 class="breadcrumb-title">Login</h2>
                <ul class="breadcrumb-menu">
                    <li>
                        <a href="{{ route('home.index') }}"><i class="far fa-home"></i> Home</a>
                    </li>
                    <li class="active">Login</li>
                </ul>
            </div>
        </div>

        <div class="login-area py-120">
            <div class="container">
                <div class="col-md-5 mx-auto">
                    <div class="login-form">
                        <div class="login-header">
                            <h3>Login</h3>
                            <p>login with your vpnox account</p>
                        </div>
                        <form action="{{ route('login') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label>Email Address</label>
                                <input name="email" type="email" class="form-control" placeholder="Your Email"/>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input name="password" type="password" class="form-control" placeholder="Your Password"/>
                            </div>
                            <div class="d-flex justify-content-between mb-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value id="remember"/>
                                    <label class="form-check-label" for="remember"> Remember Me </label>
                                </div>
                                <a href="#" class="forgot-pass">Forgot Password?</a>
                            </div>
                            <div class="d-flex align-items-center">
                                <button type="submit" class="theme-btn">Login <i class="far fa-sign-in"></i></button>
                            </div>
                        </form>
                        <div class="login-footer">
                            <p>Don't have an account? <a href="{{ route('register') }}">Register.</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
