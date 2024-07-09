@extends('admin.layouts.master')

@section('title', 'Detail Produk')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Detail Produk</h3>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-bordered">
                                <tr>
                                    <th>Kode Produk</th>
                                    <td>{{ $produk->kode }}</td>
                                </tr>
                                <tr>
                                    <th>Nama Produk</th>
                                    <td>{{ $produk->nama }}</td>
                                </tr>
                                <tr>
                                    <th>Harga</th>
                                    <td>{{ $produk->harga }}</td>
                                </tr>
                                <tr>
                                    <th>Gambar Produk</th>
                                    <td><img src="{{ $produk->gambar_produk }}" alt="{{ $produk->nama }}" style="width: 100px;"></td>
                                </tr>
                                <tr>
                                    <th>Stok</th>
                                    <td>{{ $produk->stok }}</td>
                                </tr>
                                <tr>
                                    <th>Rating</th>
                                    <td>{{ $produk->rating }}</td>
                                </tr>
                                <tr>
                                    <th>Minimal Stok</th>
                                    <td>{{ $produk->min_stok }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{{ $produk->deskripsi }}</td>
                                </tr>
                                <tr>
                                    <th>Jenis Produk</th>
                                    <td>{{ $produk->jenisProduk->nama }}</td>
                                </tr>
                            </table>
                            <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
