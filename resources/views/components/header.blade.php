<header class="header">
    <div class="main-navigation">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="{{ route('home.index') }}">
                    <img src="{{ asset('assets/img/logo/logo.png') }}" class="logo-display" alt="logo"/>
                    <img src="{{ asset('assets/img/logo/logo-dark.png') }}" class="logo-scrolled" alt="logo"/>
                </a>
                <div class="mobile-menu-right">
                    <a href="#" class="mobile-search-btn search-box-outer"><i class="far fa-search"></i></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"><i class="far fa-bars"></i></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse" id="main_nav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home.index') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('about.index') }}">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('service.index') }}">Service</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('price.index') }}">Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
                        </li>
                    </ul>
                    <div class="header-nav-right">
                        <div class="header-btn">
                            @auth
                                <a href="{{ route('profile.index') }}" class="theme-btn">Profile</a>
                            @else
                                <a href="{{ route('login') }}" class="theme-btn">Login</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
