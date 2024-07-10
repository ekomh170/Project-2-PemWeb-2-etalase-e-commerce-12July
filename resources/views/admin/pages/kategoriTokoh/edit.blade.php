@extends('admin.layouts.master')

@section('title', 'Edit Kategori Tokoh')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Edit Data - Kategori Tokoh</h3>
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
                        <a href="{{ route('kategoriTokoh.index') }}">Kategori Tokoh</a>
                    </li>
                    <li class="separator">
                        <i class="icon-arrow-right"></i>
                    </li>
                    <li class="nav-item">
                        <a href="#">Edit Kategori Tokoh</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('kategoriTokoh.update', $kategoriTokoh->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="form-group">
                                    <label for="nama"><strong>Nama Kategori Tokoh</strong></label>
                                    <input type="text" name="nama" id="nama" class="form-control" maxlength="45" value="{{ $kategoriTokoh->nama }}" required>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('kategoriTokoh.index') }}" class="btn btn-secondary">Kembali ke Kategori Tokoh</a>
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
