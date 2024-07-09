@extends('admin.layouts.master')

@section('title', 'Edit Produk')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Edit Produk</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="kode">Kode Produk</label>
                                    <input type="text" name="kode" id="kode" class="form-control" value="{{ $produk->kode }}">
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama Produk</label>
                                    <input type="text" name="nama" id="nama" class="form-control" value="{{ $produk->nama }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="harga">Harga</label>
                                    <input type="number" name="harga" id="harga" class="form-control" value="{{ $produk->harga }}" required>
                                </div>
                                <div class="form-group">
                                    <label for="gambar_produk">Gambar Produk</label>
                                    <input type="text" name="gambar_produk" id="gambar_produk" class="form-control" value="{{ $produk->gambar_produk }}">
                                </div>
                                <div class="form-group">
                                    <label for="stok">Stok</label>
                                    <input type="number" name="stok" id="stok" class="form-control" value="{{ $produk->stok }}">
                                </div>
                                <div class="form-group">
                                    <label for="rating">Rating</label>
                                    <input type="number" name="rating" id="rating" class="form-control" value="{{ $produk->rating }}">
                                </div>
                                <div class="form-group">
                                    <label for="min_stok">Minimal Stok</label>
                                    <input type="number" name="min_stok" id="min_stok" class="form-control" value="{{ $produk->min_stok }}">
                                </div>
                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi</label>
                                    <textarea name="deskripsi" id="deskripsi" class="form-control">{{ $produk->deskripsi }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="jenis_produk_id">Jenis Produk</label>
                                    <select name="jenis_produk_id" id="jenis_produk_id" class="form-select" required>
                                        @foreach($jenisProduk as $jenis)
                                            <option value="{{ $jenis->id }}" {{ $jenis->id == $produk->jenis_produk_id ? 'selected' : '' }}>{{ $jenis->nama }}</option>
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
