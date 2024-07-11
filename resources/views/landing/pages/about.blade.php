@extends('landing.layouts.master')

@section('title', 'Tentang Kami - Testi Mart')

@section('content')

<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="about-img position-relative overflow-hidden p-5 pe-0">
                    <img class="img-fluid w-100" src="img/about.jpg" alt="Tentang Kami">
                </div>
            </div>
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                <h1 class="display-5 mb-4">Tentang Testi Mart</h1>
                <p class="mb-4">Testi Mart adalah etalase modern yang menyediakan berbagai macam produk berkualitas mulai dari kebutuhan sehari-hari, elektronik, hingga perlengkapan rumah tangga. Kami berkomitmen untuk memberikan produk terbaik dengan harga terjangkau.</p>
                <p><i class="fa fa-check text-primary me-3"></i>Produk berkualitas tinggi</p>
                <p><i class="fa fa-check text-primary me-3"></i>Harga terjangkau</p>
                <p><i class="fa fa-check text-primary me-3"></i>Layanan pelanggan terbaik</p>
                <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Selengkapnya</a>
            </div>
        </div>
    </div>
</div>
<!-- About End -->

<!-- Firm Visit Start -->
<div class="container-fluid bg-primary bg-icon mt-5 py-6">
    <div class="container">
        <div class="row g-5 align-items-center">
            <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                <h1 class="display-5 text-white mb-3">Kunjungi Toko Kami</h1>
                <p class="text-white mb-0">Testi Mart hadir untuk memberikan pengalaman berbelanja yang nyaman dan lengkap. Temukan berbagai produk favorit Anda dengan mudah dan nikmati pelayanan terbaik dari kami.</p>
            </div>
            <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Kunjungi Sekarang</a>
            </div>
        </div>
    </div>
</div>
<!-- Firm Visit End -->

<!-- Feature Start -->
<div class="container-fluid bg-light bg-icon py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Fitur Kami</h1>
            <p>Kami menawarkan beragam fitur untuk memenuhi kebutuhan berbelanja Anda.</p>
        </div>
        <div class="row g-4">
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-1.png" alt="">
                    <h4 class="mb-3">Proses Alamiah</h4>
                    <p class="mb-4">Kami menjamin bahwa produk-produk yang dijual di Testi Mart melalui proses alamiah yang aman dan sehat.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-2.png" alt="">
                    <h4 class="mb-3">Produk Organik</h4>
                    <p class="mb-4">Kami menyediakan produk-produk organik yang aman untuk dikonsumsi dan ramah lingkungan.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Baca Selengkapnya</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                <div class="bg-white text-center h-100 p-4 p-xl-5">
                    <img class="img-fluid mb-4" src="img/icon-3.png" alt="">
                    <h4 class="mb-3">Aman Secara Biologis</h4>
                    <p class="mb-4">Produk kami telah melalui uji keamanan secara biologis untuk memastikan kualitas dan keamanan konsumsi.</p>
                    <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Feature End -->

@endsection
