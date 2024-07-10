<!-- Navbar Start -->
<div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
        <div class="col-lg-6 px-5 text-start">
            <small><i class="fa fa-map-marker-alt me-2"></i>Jawa Barat, Indonesia</small>
        </div>
        <div class="col-lg-6 px-5 text-end">
            <small>Follow Us :</small>
            <a class="text-body ms-3" href="https://www.linkedin.com/in/eko-haryono-290/" target="_blank"><i
                    class="fab fa-linkedin-in"></i></a>
        </div>
    </div>

    <nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
        <a href="{{ url('/') }}" class="navbar-brand ms-4 ms-lg-0">
            <h1 class="fw-bold text-primary m-0">Testi <span class="text-secondary">Mart</span></h1>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="{{ url('/') }}" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Hal.
                    Utama</a>
                <a href="{{ url('/about') }}"
                    class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">Tentang</a>
                <a href="{{ url('/product') }}"
                    class="nav-item nav-link {{ request()->is('product') ? 'active' : '' }}">Produk & Testi</a>
                <a href="{{ url('/blog') }}" class="nav-item nav-link {{ request()->is('blog') ? 'active' : '' }}">Blog
                </a>
                <a href="{{ url('/contact') }}"
                    class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Kontak</a>

                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->role == 'admin')
                            <a href="{{ url('/panel/dashboardAdmin') }}" class="nav-item nav-link">Dashboard Admin</a>
                        @elseif (Auth::user()->role == 'member')
                            <a href="{{ url('/dashboard') }}" class="nav-item nav-link">Dashboard Member</a>
                        @else
                            <a href="{{ url('/dashboard') }}" class="nav-item nav-link">Dashboard</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="nav-item nav-link">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>
                        @endif
                    @endauth
                @endif

            </div>
            <div class="d-none d-lg-flex ms-2">
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-user text-body"></small>
                </a>
                <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                    <small class="fa fa-shopping-bag text-body"></small>
                </a>
            </div>
        </div>
    </nav>
</div>
<!-- Navbar End -->
