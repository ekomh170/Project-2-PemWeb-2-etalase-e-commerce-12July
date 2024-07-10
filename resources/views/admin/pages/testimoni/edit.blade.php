@extends('admin.layouts.master')

@section('title', 'Edit Testimoni')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Edit Data - Testimoni</h3>
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
                        <a href="#">Edit Testimoni</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('testimoni.update', $testimoni->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="tanggal"><strong>Tanggal</strong></label>
                                    <input type="date" name="tanggal" id="tanggal" class="form-control @error('tanggal') is-invalid @enderror" value="{{ old('tanggal', $testimoni->tanggal) }}" required>
                                    @error('tanggal')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="nama_tokoh"><strong>Nama Tokoh</strong></label>
                                    <input type="text" name="nama_tokoh" id="nama_tokoh" class="form-control @error('nama_tokoh') is-invalid @enderror" value="{{ old('nama_tokoh', $testimoni->nama_tokoh) }}" required>
                                    @error('nama_tokoh')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="komentar"><strong>Komentar</strong></label>
                                    <textarea name="komentar" id="komentar" class="form-control @error('komentar') is-invalid @enderror" required>{{ old('komentar', $testimoni->komentar) }}</textarea>
                                    @error('komentar')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="rating"><strong>Rating</strong></label>
                                    <input type="number" name="rating" id="rating" class="form-control @error('rating') is-invalid @enderror" value="{{ old('rating', $testimoni->rating) }}" min="1" max="5" required>
                                    @error('rating')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="produk_id"><strong>Produk</strong></label>
                                    <select name="produk_id" id="produk_id" class="form-select @error('produk_id') is-invalid @enderror" required>
                                        @foreach($produk as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $testimoni->produk_id ? 'selected' : '' }}>{{ $item->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('produk_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label for="kategori_tokoh_id"><strong>Kategori Tokoh</strong></label>
                                    <select name="kategori_tokoh_id" id="kategori_tokoh_id" class="form-select @error('kategori_tokoh_id') is-invalid @enderror" required>
                                        @foreach($kategoriTokoh as $kategori)
                                            <option value="{{ $kategori->id }}" {{ $kategori->id == $testimoni->kategori_tokoh_id ? 'selected' : '' }}>{{ $kategori->nama }}</option>
                                        @endforeach
                                    </select>
                                    @error('kategori_tokoh_id')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('testimoni.index') }}" class="btn btn-secondary">Kembali ke Testimoni</a>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
