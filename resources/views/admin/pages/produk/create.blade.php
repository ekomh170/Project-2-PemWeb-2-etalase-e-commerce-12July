@extends('admin.layouts.master')

@section('title', 'Tambah Produk')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Tambah Data - Produk</h3>
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
                        <a href="#">Produk</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Tambah Produk</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('produk.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <label for="kode">Kode Produk</label>
                                    <input type="text" name="kode" id="kode" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Produk</label>
                                    <input type="text" name="nama" id="nama" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="harga" id="harga" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label for="gambar_produk">Gambar Produk</label>
                                    <input type="text" name="gambar_produk" id="gambar_produk" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" name="stok" id="stok" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <input type="number" name="rating" id="rating" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="min_stok">Minimal Stok</label>
                                    <input type="number" name="min_stok" id="min_stok" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_produk_id">Jenis Produk</label>
                                    <select name="jenis_produk_id" id="jenis_produk_id" class="form-select" required>
                                        @foreach($jenisProduk as $jenis)
                                            <option value="{{ $jenis->id }}">{{ $jenis->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
