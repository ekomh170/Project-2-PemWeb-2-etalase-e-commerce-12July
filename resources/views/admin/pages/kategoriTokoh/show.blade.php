@extends('admin.layouts.master')

@section('title', 'Detail Kategori Tokoh')

@section('content')
    <div class="container">
        <div class="page-inner">
            <div class="page-header">
                <h3 class="fw-bold mb-3">Detail Kategori Tokoh</h3>
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
                        <a href="#">Detail Kategori Tokoh</a>
                    </li>
                </ul>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="fw-bold">Nama Kategori Tokoh: {{ $kategoriTokoh->nama }}</h4>
                            <hr>
                            <h5 class="fw-bold mb-3">Daftar Testimoni:</h5>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Tokoh</th>
                                        <th>Komentar</th>
                                        <th>Rating</th>
                                        <th>Tanggal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($testimoniList as $index => $testimoni)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $testimoni->nama_tokoh }}</td>
                                            <td>{{ $testimoni->komentar }}</td>
                                            <td>{{ $testimoni->rating }}</td>
                                            <td>{{ $testimoni->tanggal }}</td>
                                        </tr>
                                    @endforeach
                                    @if($testimoniList->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada testimoni yang terkait dengan kategori tokoh ini.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-between mt-3">
                                <a href="{{ route('kategoriTokoh.index') }}" class="btn btn-secondary">Kembali ke Kategori Tokoh</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
