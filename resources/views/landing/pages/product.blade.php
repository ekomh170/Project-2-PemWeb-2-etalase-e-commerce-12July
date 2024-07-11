@extends('landing.layouts.master')

@section('title', 'Produk - Testi Mart')

@section('content')
    <!-- Produk Mulai -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-0 gx-5 align-items-end">
                <div class="col-lg-6">
                    <div class="section-header text-start mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                        <h1 class="display-5 mb-3">Produk Kami</h1>
                        <p>Kami menyediakan berbagai macam produk berkualitas tinggi yang dapat memenuhi kebutuhan Anda. Dari bahan pangan organik hingga produk sehari-hari, kami selalu berusaha memberikan yang terbaik untuk Anda. Temukan pilihan produk terbaik hanya di Testi Mart.</p>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div id="tab-1" class="tab-pane fade show p-0 active">
                    <div class="row g-4">
                        @foreach ($produk as $item)
                            <div class="col-xl-3 col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="product-item">
                                    <div class="position-relative bg-light overflow-hidden">
                                        <img class="img-fluid w-100" src="{{ asset('storage/' . $item->gambar_produk) }}"
                                            alt="{{ $item->nama }}">
                                        <div
                                            class="bg-secondary rounded text-white position-absolute start-0 top-0 m-4 py-1 px-3">
                                            Baru
                                        </div>
                                    </div>
                                    <div class="text-center p-4">
                                        <a class="d-block h5 mb-2" href="">{{ $item->nama }}</a>
                                        <span class="text-primary me-1">Rp {{ number_format($item->harga, 2) }}</span>
                                        <!-- Anda bisa menambahkan harga diskon jika ada -->
                                        @if ($item->harga_diskon)
                                            <span class="text-body text-decoration-line-through">Rp
                                                {{ number_format($item->harga_diskon, 2) }}</span>
                                        @endif
                                    </div>
                                    <div class="d-flex border-top">
                                        <small class="w-50 text-center border-end py-2">
                                            <a class="text-body" href=""><i
                                                    class="fa fa-eye text-primary me-2"></i>Lihat Detail</a>
                                        </small>
                                        <small class="w-50 text-center py-2">
                                            <a class="text-body" href=""><i
                                                    class="fa fa-shopping-bag text-primary me-2"></i>Tambah ke Keranjang</a>
                                        </small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-12 text-center wow fadeInUp" data-wow-delay="0.1s">
                            <a class="btn btn-primary rounded-pill py-3 px-5" href="{{ route('login') }}">Lihat Produk Lainnya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Produk Selesai -->

    <!-- Kunjungan Mulai -->
    <div class="container-fluid bg-primary bg-icon mt-5 py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-md-7 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-5 text-white mb-3">Kunjungi Kami</h1>
                    <p class="text-white mb-0">Kami mengundang Anda untuk mengunjungi fasilitas kami dan melihat langsung
                        bagaimana kami bekerja. Dengan lokasi yang mudah dijangkau, Anda dapat merasakan langsung kualitas
                        produk dan layanan kami.</p>
                </div>
                <div class="col-md-5 text-md-end wow fadeIn" data-wow-delay="0.5s">
                    <a class="btn btn-lg btn-secondary rounded-pill py-3 px-5" href="">Kunjungi Sekarang</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Kunjungan Selesai -->

    <!-- Testimonial Mulai -->
<div class="container-fluid bg-light bg-icon py-6">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
            style="max-width: 500px;">
            <h1 class="display-5 mb-3">Ulasan Pelanggan</h1>
            <p>Berikut adalah beberapa ulasan dari pelanggan kami yang telah merasakan kualitas produk dan layanan kami.
            </p>
        </div>
        <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.1s">
            @foreach($testimoni as $t)
                <div class="testimonial-item position-relative bg-white p-5 mt-4">
                    <i class="fa fa-quote-left fa-3x text-primary position-absolute top-0 start-0 mt-n4 ms-5"></i>
                    <p class="mb-4">{{ $t->komentar }}</p>
                    <div class="d-flex align-items-center">
                        <div class="ms-3">
                            <h5 class="mb-1">{{ $t->nama_tokoh }}</h5>
                            <span>{{ $t->kategoriTokoh->nama ?? 'Kategori tidak tersedia' }}</span> <!-- Assuming kategoriTokoh has a 'nama' field -->
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Testimonial Selesai -->


@endsection
