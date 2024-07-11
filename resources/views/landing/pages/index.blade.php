@extends('landing.layouts.master')

@section('title', 'Halaman Utama - Testi Mart')

@section('content')

    <!-- Carousel -->
<div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ asset('assets/landing') }}/img/carousel-1.jpg" alt="Gambar" style="height: 600px; object-fit: cover;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown" style="color: orange;">Produk Organik Berkualitas</h1>
                                <a href="{{ url('/product') }}" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Jelajahi Produk Kami</a>
                                <a href="{{ route('login') }}" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Bergabung Sebagai Testimoni Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="w-100" src="{{ asset('assets/landing') }}/img/carousel-2.jpg" alt="Gambar" style="height: 600px; object-fit: cover;">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-lg-7">
                                <h1 class="display-2 mb-5 animated slideInDown" style="color: orange;">Pilihan Makanan Alami dan Sehat</h1>
                                <a href="{{ url('/product') }}" class="btn btn-primary rounded-pill py-sm-3 px-sm-5">Jelajahi Produk Kami</a>
                                <a href="{{ route('login') }}" class="btn btn-secondary rounded-pill py-sm-3 px-sm-5 ms-3">Bergabung Sebagai Testimoni Kami</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Sebelumnya</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Selanjutnya</span>
        </button>
    </div>
</div>
<!-- Carousel -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="{{ asset('assets/landing/img/About_Sketsa_Toko.jpg')}}" alt="Tentang Kami">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Tentang Testi Mart</h1>
                    <p class="mb-4">Testi Mart adalah etalase modern yang menyediakan berbagai macam produk berkualitas
                        mulai dari kebutuhan sehari-hari, elektronik, hingga perlengkapan rumah tangga. Kami berkomitmen
                        untuk memberikan produk terbaik dengan harga terjangkau.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Produk berkualitas tinggi</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Harga terjangkau</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Layanan pelanggan terbaik</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div class="container-fluid bg-light bg-icon py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Fitur Kami</h1>
                <p>Kami menawarkan beragam fitur untuk memenuhi kebutuhan berbelanja Anda.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Proses Alamiah</h4>
                        <p class="mb-4">Kami menjamin bahwa produk-produk yang dijual di Testi Mart melalui proses alamiah
                            yang aman dan sehat.</p>
                       
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Produk Organik</h4>
                        <p class="mb-4">Kami menyediakan produk-produk organik yang aman untuk dikonsumsi dan ramah
                            lingkungan.</p>
                        
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <h4 class="mb-3">Aman Secara Biologis</h4>
                        <p class="mb-4">Produk kami telah melalui uji keamanan secara biologis untuk memastikan kualitas
                            dan keamanan konsumsi.</p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- Firm Visit Start -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Kunjungi Toko Kami</h1>
                    <p class="text-white mb-0">Testi Mart hadir untuk memberikan pengalaman berbelanja yang nyaman dan
                        lengkap. Temukan berbagai produk favorit Anda dengan mudah dan nikmati pelayanan terbaik dari kami.
                    </p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Kunjungi Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Firm Visit End -->

    <!-- Blog Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                style="max-width: 500px;">
                <h1 class="display-5 mb-3">Latest Updates</h1>
                <p>Temukan berbagai informasi terbaru mengenai produk dan testimoni di Testi Mart.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Tips Memilih Produk Terbaik di Testi Mart</a>
                        <p>Pelajari cara memilih produk terbaik yang sesuai dengan kebutuhan Anda di Testi Mart. Kami
                            menyediakan panduan lengkap agar Anda tidak salah pilih.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>10 Jul, 2024</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Cara Mendapatkan Testimoni Positif dari
                            Pelanggan</a>
                        <p>Testimoni positif adalah kunci kesuksesan bisnis Anda. Simak tips dan trik mendapatkan testimoni
                            positif dari pelanggan setia Testi Mart.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>11 Jul, 2024</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Produk Baru: Kualitas Tinggi dengan Harga
                            Terjangkau</a>
                        <p>Testi Mart menghadirkan produk baru dengan kualitas tinggi namun tetap dengan harga yang
                            terjangkau. Temukan produk terbaru kami sekarang juga!</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>12 Jul, 2024</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Pengalaman Pelanggan: Kenapa Mereka Memilih
                            Testi Mart</a>
                        <p>Dengarkan langsung dari pelanggan kami mengapa mereka memilih dan mempercayai Testi Mart sebagai
                            penyedia produk berkualitas.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>13 Jul, 2024</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Panduan Lengkap Memilih Produk Kesehatan</a>
                        <p>Memilih produk kesehatan bisa menjadi tantangan. Kami hadir dengan panduan lengkap untuk membantu
                            Anda memilih produk kesehatan yang tepat.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>14 Jul, 2024</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light p-4">
                        <a class="d-block h5 lh-base mb-4" href="">Kiat Mendapatkan Testimoni Berkualitas dari
                            Pelanggan</a>
                        <p>Mendapatkan testimoni berkualitas dari pelanggan adalah bagian penting dari strategi pemasaran.
                            Pelajari kiat-kiat untuk meraih testimoni terbaik.</p>
                        <div class="text-muted border-top pt-4">
                            <small class="me-3"><i class="fa fa-user text-primary me-2"></i>Admin</small>
                            <small class="me-3"><i class="fa fa-calendar text-primary me-2"></i>15 Jul, 2024</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Blog End -->

@endsection
