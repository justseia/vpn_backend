@extends('layouts.app')

@section('content')
    <main class="main">
        <div class="site-breadcrumb">
            <div class="container">
                <h2 class="breadcrumb-title">Profile</h2>
                <ul class="breadcrumb-menu">
                    <li>
                        <a href="{{ route('home.index') }}"><i class="far fa-home"></i> Home</a>
                    </li>
                    <li class="active">Profile</li>
                </ul>
            </div>
        </div>

        <div class="blog-area py-120">
            <div class="container">
                <div class="row">
                    @if(auth()->user()->buy)
                        <div class="col-md-6 col-lg-4">
                            <div class="blog-item">
                                <div class="blog-item-img">
                                    <img src="{{ asset('assets/img/qr.png') }}" alt="Thumb"/>
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
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
