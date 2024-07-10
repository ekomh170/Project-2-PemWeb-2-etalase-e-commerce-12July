@extends('admin.layouts.master')

@section('title', 'Edit Produk')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Edit Data - Produk</h3>
                <ul class="breadcrumbs mb-3">
                    <li class="nav-home">
                        <a href="#">
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
                        <a href="{{ route('produk.index') }}">Produk</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Produk</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="kode"><strong>Kode Produk</strong></label>
                                    <input type="text" name="kode" id="kode" class="form-control" value="{{ $produk->kode }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama"><strong>Nama Produk</strong></label>
                                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $produk->nama }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga"><strong>Harga</strong></label>
                                    <input type="number" name="harga" id="harga" class="form-control" value="{{ $produk->harga }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="gambar_produk"><strong>Gambar Produk</strong></label>
                                    <input type="file" name="gambar_produk" id="gambar_produk" class="form-control">
                                    @if($produk->gambar_produk)
                                        <img src="{{ asset('storage/produk/' . $produk->gambar_produk) }}" alt="Gambar Produk" width="100">
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="stok"><strong>Stok</strong></label>
                                    <input type="number" name="stok" id="stok" class="form-control" value="{{ $produk->stok }}">
                                </div>
                                <div class="form-group">
                                    <label for="rating"><strong>Rating</strong></label>
                                    <input type="number" name="rating" id="rating" class="form-control" value="{{ $produk->rating }}">
                                </div>
                                <div class="form-group">
                                    <label for="min_stok"><strong>Minimal Stok</strong></label>
                                    <input type="number" name="min_stok" id="min_stok" class="form-control" value="{{ $produk->min_stok }}">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi"><strong>Deskripsi</strong></label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $produk->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_produk_id"><strong>Jenis Produk</strong></label>
                                    <select name="jenis_produk_id" id="jenis_produk_id" class="form-select" required>
                                        @foreach($jenisProduk as $jenis)
                                            <option value="{{ $jenis->id }}" {{ $jenis->id == $produk->jenis_produk_id ? 'selected' : '' }}>{{ $jenis->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali ke Produk</a>
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
