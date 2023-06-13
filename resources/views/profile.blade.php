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
{{--                                            <li>--}}
{{--                                                <a href="#"><i class="far fa-user-circle"></i> By Alicia Davis</a>--}}
{{--                                            </li>--}}
                                            <li>
                                                <a href="#"><i class="far fa-calendar-alt"></i> Jun 12, 2023</a>
                                            </li>
                                        </ul>
                                    </div>
{{--                                    <h4 class="blog-title">--}}
{{--                                        <a href="#">There are many variates of passages alteration</a>--}}
{{--                                    </h4>--}}
                                    <p style="white-space: pre-line; overflow: hidden">[Interface]
                                        Address = 10.7.0.2/24, fddd:2c4:2c4:2c4::2/64
                                        DNS = 195.210.46.195, 195.210.46.132
                                        PrivateKey = YKLffhzKLVUhKbYKWar2fD25m6xpprCJmXQJsLWF9UY=

                                        [Peer]
                                        PublicKey = 0BjMe3bSIgVK1T9CXTlDhwz1AO3AmRHu9dXGWHoph18=
                                        PresharedKey = HmJJbY/bA0u5pFtUvmtX+mcWdDXOceji9CSNpZzW0ds=
                                        AllowedIPs = 0.0.0.0/0, ::/0
                                        Endpoint = 195.49.212.16:51820
                                        PersistentKeepalive = 25
                                    </p>
{{--                                    <a class="theme-btn" href="#">Read More</a>--}}
                                </div>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </main>
@endsection
