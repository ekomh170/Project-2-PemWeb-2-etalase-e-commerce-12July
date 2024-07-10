@extends('landing.layouts.master')

@section('title', 'Tentang Kami - Testi Mart')

@section('content')

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img position-relative overflow-hidden p-5 pe-0">
                        <img class="img-fluid w-100" src="img/about.jpg" alt="About Us">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-5 mb-4">Testi Mart: Your Trusted Partner in Quality</h1>
                    <p class="mb-4">Testi Mart didedikasikan untuk menyediakan produk-produk berkualitas tinggi yang dapat memenuhi kebutuhan sehari-hari Anda. Dengan fokus pada kepuasan pelanggan, kami terus berinovasi untuk memberikan layanan terbaik.</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Produk berkualitas tinggi dan terpercaya</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Pelayanan pelanggan yang ramah dan responsif</p>
                    <p><i class="fa fa-check text-primary me-3"></i>Komitmen terhadap inovasi dan keberlanjutan</p>
                    <a class="btn btn-primary rounded-pill py-3 px-5 mt-3" href="">Baca Lebih Lanjut</a>
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
                    <h1 class="display-5 text-white mb-3">Kunjungi Kami</h1>
                    <p class="text-white mb-0">Kami mengundang Anda untuk mengunjungi fasilitas kami dan melihat langsung bagaimana kami bekerja. Dengan lokasi yang mudah dijangkau, Anda dapat merasakan langsung kualitas produk dan layanan kami.</p>
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
                <h1 class="display-5 mb-3">Keunggulan Kami</h1>
                <p>Kami berkomitmen untuk memberikan produk dan layanan terbaik kepada pelanggan kami. Berikut adalah beberapa keunggulan yang kami tawarkan.</p>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-1.png" alt="Natural Process">
                        <h4 class="mb-3">Proses Alami</h4>
                        <p class="mb-4">Kami memastikan bahwa semua produk kami diproses secara alami tanpa bahan kimia berbahaya.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Baca Lebih Lanjut</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-2.png" alt="Organic Products">
                        <h4 class="mb-3">Produk Organik</h4>
                        <p class="mb-4">Produk kami terbuat dari bahan-bahan organik yang aman dan sehat untuk dikonsumsi.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Baca Lebih Lanjut</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5">
                        <img class="img-fluid mb-4" src="img/icon-3.png" alt="Biologically Safe">
                        <h4 class="mb-3">Aman Secara Biologis</h4>
                        <p class="mb-4">Kami menjamin bahwa produk kami aman dan tidak mengandung bahan berbahaya yang dapat merusak kesehatan.</p>
                        <a class="btn btn-outline-primary border-2 py-2 px-4 rounded-pill" href="">Baca Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

@endsection
