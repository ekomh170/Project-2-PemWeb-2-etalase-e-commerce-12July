<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h1 class="fw-bold text-primary mb-4">Testi <span class="text-secondary">Mart</span></h1>
                <p>Testi Mart adalah toko online yang menyediakan berbagai produk berkualitas untuk kebutuhan harian
                    Anda.</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Alamat</h4>
                <p><i class="fa fa-map-marker-alt me-3"></i>Jl. Raya Bogor No. 123, Bogor, Indonesia</p>
                <p><i class="fa fa-phone-alt me-3"></i>+021 123 45678</p>
                <p><i class="fa fa-envelope me-3"></i>info@testimart.com</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h4 class="text-light mb-4">Tautan Cepat</h4>
                <a class="btn btn-link" href="{{ url('/') }}">Hal. Utama</a>
                <a class="btn btn-link" href="{{ url('/product') }}">Produk & Testi</a>
                <a class="btn btn-link" href="{{ url('/blog') }}">Blog</a>
                <a class="btn btn-link" href="{{ url('/contact') }}">Kontak</a>
                @if (Route::has('login'))
                    @auth
                        @if (Auth::user()->role == 'admin')
                            <a href="{{ url('/panel/dashboardAdmin') }}" class="btn btn-link">Dashboard Admin</a>
                        @elseif (Auth::user()->role == 'member')
                            <a href="{{ url('/dashboard') }}" class="btn btn-link">Dashboard Member</a>
                        @else
                            <a href="{{ url('/dashboard') }}" class="btn btn-link">Dashboard</a>
                        @endif
                    @else
                        <a href="{{ route('login') }}" class="btn btn-link">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-link">Register</a>
                        @endif
                    @endauth
                @endif

            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="#">Testi Mart</a>, Seluruh Hak Cipta Dilindungi.
                </div>
                <div class="col-md-6 text-center text-md-end">
                    Dirancang Oleh <a
                        href="https://github.com/ekomh170/Project-2-PemWeb-2-etalase-e-commerce-12July.git">Kelompok 1 -
                        Pemrograman Web - TI02</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
