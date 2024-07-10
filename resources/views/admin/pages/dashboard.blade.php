@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Dashboard</h3>
                    <h6 class="op-2 mb-2">Dashboard Produk dan Testimoni</h6>
                </div>
            </div>
            {{-- Save Session --}}
            @if (Session::has('success'))
                <div class="alert alert-success mt-1 mb-5">
                    {{ Session::get('success') }}
                </div>
            @endif
            {{-- Save Session --}}
            <div class="row">
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-primary bubble-shadow-small">
                                        <i class="fas fa-users"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Produk</p>
                                        <h4 class="card-title">{{ $total_product }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-info bubble-shadow-small">
                                        <i class="fas fa-user-check"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Testimoni</p>
                                        <h4 class="card-title">{{ $total_testimoni }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-success bubble-shadow-small">
                                        <i class="fas fa-luggage-cart"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Jenis Produk</p>
                                        <h4 class="card-title">{{ $total_jenis_produk }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="card card-stats card-round">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-icon">
                                    <div class="icon-big text-center icon-secondary bubble-shadow-small">
                                        <i class="far fa-check-circle"></i>
                                    </div>
                                </div>
                                <div class="col col-stats ms-3 ms-sm-0">
                                    <div class="numbers">
                                        <p class="card-category">Kategori Tokoh</p>
                                        <h4 class="card-title">{{ $total_kategori_tokoh }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h2 class="mb-2">{{ $total_user }}</h2>
                            <p class="text-muted">Total Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h2 class="mb-2">{{ $new_user }}</h2>
                            <p class="text-muted">Member Baru</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title fw-mediumbold">Testimoni Produk</div>
                            <div class="card-list">
                                @foreach ($testimoni as $item)
                                    <div class="item-list">
                                        <div class="avatar">
                                            <span class="avatar-title rounded-circle border border-white bg-info">{{ substr($item->nama_tokoh, 0, 1) }}</span>
                                        </div>
                                        <div class="info-user ms-3">
                                            <div class="username">{{ $item->nama_tokoh }}</div>
                                            <div class="status">{{ $item->kategoriTokoh->nama }}</div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Komentar Testimoni Terbaru</div>
                            </div>
                        </div>
                        <div class="card-body">
                            @foreach ($testimoni as $item)
                                <div class="d-flex">
                                    <div class="avatar avatar">
                                        <span class="avatar-title rounded-circle border border-white bg-info">{{ substr($item->nama_tokoh, 0, 1) }}</span>
                                    </div>
                                    <div class="flex-1 ms-3 pt-1">
                                        <h6 class="text-uppercase fw-bold mb-1">
                                            {{ $item->nama_tokoh }}
                                        </h6>
                                        <span class="text-muted">{{ $item->komentar }}</span>
                                    </div>
                                </div>
                                <div class="separator-dashed"></div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
