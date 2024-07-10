@extends('admin.layouts.master')

@section('title', 'Detail Testimoni')

@section('content')
<div class="container">
    <div class="page-inner">
        <div class="page-header">
            <h3 class="fw-bold mb-3">Detail Data - Testimoni</h3>
            <ul class="breadcrumbs mb-3">
                <li class="nav-home">
                    <a href="{{ route('dashboard') }}">
                        <i class="icon-home"></i>
                    </a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Master Data</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="{{ route('testimoni.index') }}">Testimoni</a>
                </li>
                <li class="separator">
                    <i class="icon-arrow-right"></i>
                </li>
                <li class="nav-item">
                    <a href="#">Detail Testimoni</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tanggal"><strong>Tanggal:</strong></label>
                                    <p>{{ $testimoni->tanggal }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="nama_tokoh"><strong>Nama Tokoh:</strong></label>
                                    <p>{{ $testimoni->nama_tokoh }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="rating"><strong>Rating:</strong></label>
                                    <p>{{ $testimoni->rating }}</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="produk"><strong>Produk:</strong></label>
                                    <p>{{ $testimoni->produk->nama }}</p>
                                </div>
                                <div class="form-group">
                                    <label for="kategori_tokoh"><strong>Kategori Tokoh:</strong></label>
                                    <p>{{ $testimoni->kategoriTokoh->nama }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="komentar"><strong>Komentar:</strong></label>
                            <p>{{ $testimoni->komentar }}</p>
                        </div>
                        <a href="{{ route('testimoni.index') }}" class="btn btn-secondary">Kembali ke Testimoni</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
