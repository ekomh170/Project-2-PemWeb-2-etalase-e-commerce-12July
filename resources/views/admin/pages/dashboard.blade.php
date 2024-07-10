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
                                        <h4 class="card-title">1,294</h4>
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
                                        <h4 class="card-title">1303</h4>
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
                                        <h4 class="card-title">$ 1,345</h4>
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
                                        <h4 class="card-title">576</h4>
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
                            <h2 class="mb-2">17</h2>
                            <p class="text-muted">Total Member</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body pb-0">
                            <h2 class="mb-2">27</h2>
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
                                <div class="item-list">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/admin') }}/img/jm_denis.jpg" alt="..."
                                            class="avatar-img rounded-circle">
                                    </div>
                                    <div class="info-user ms-3">
                                        <div class="username">Jimmy Denis</div>
                                        <div class="status">Graphic Designer</div>
                                    </div>
                                </div>
                                <div class="item-list">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/admin') }}/img/chadengle.jpg" alt="..."
                                            class="avatar-img rounded-circle">
                                    </div>
                                    <div class="info-user ms-3">
                                        <div class="username">Chad</div>
                                        <div class="status">CEO Zeleaf</div>
                                    </div>
                                </div>
                                <div class="item-list">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/admin') }}/img/talha.jpg" alt="..."
                                            class="avatar-img rounded-circle">
                                    </div>
                                    <div class="info-user ms-3">
                                        <div class="username">Talha</div>
                                        <div class="status">Front End Designer</div>
                                    </div>
                                </div>
                                <div class="item-list">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/admin') }}/img/mlane.jpg" alt="..."
                                            class="avatar-img rounded-circle">
                                    </div>
                                    <div class="info-user ms-3">
                                        <div class="username">John Doe</div>
                                        <div class="status">Back End Developer</div>
                                    </div>
                                </div>
                                <div class="item-list">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/admin') }}/img/talha.jpg" alt="..."
                                            class="avatar-img rounded-circle">
                                    </div>
                                    <div class="info-user ms-3">
                                        <div class="username">Talha</div>
                                        <div class="status">Front End Designer</div>
                                    </div>
                                </div>
                                <div class="item-list">
                                    <div class="avatar">
                                        <img src="{{ asset('assets/admin') }}/img/jm_denis.jpg" alt="..."
                                            class="avatar-img rounded-circle">
                                    </div>
                                    <div class="info-user ms-3">
                                        <div class="username">Jimmy Denis</div>
                                        <div class="status">Graphic Designer</div>
                                    </div>
                                </div>
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
                            <div class="d-flex">
                                <div class="avatar avatar-online">
                                    <span class="avatar-title rounded-circle border border-white bg-info">J</span>
                                </div>
                                <div class="flex-1 ms-3 pt-1">
                                    <h6 class="text-uppercase fw-bold mb-1">
                                        Joko Subianto
                                        <span class="text-warning ps-3">pending</span>
                                    </h6>
                                    <span class="text-muted">I am facing some trouble with my viewport. When i
                                        start my</span>
                                </div>
                                <div class="float-end pt-1">
                                    <small class="text-muted">8:40 PM</small>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            <div class="d-flex">
                                <div class="avatar avatar-offline">
                                    <span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                                </div>
                                <div class="flex-1 ms-3 pt-1">
                                    <h6 class="text-uppercase fw-bold mb-1">
                                        Prabowo Widodo
                                        <span class="text-success ps-3">open</span>
                                    </h6>
                                    <span class="text-muted">I have some query regarding the license issue.</span>
                                </div>
                                <div class="float-end pt-1">
                                    <small class="text-muted">1 Day Ago</small>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            <div class="d-flex">
                                <div class="avatar avatar-away">
                                    <span class="avatar-title rounded-circle border border-white bg-danger">L</span>
                                </div>
                                <div class="flex-1 ms-3 pt-1">
                                    <h6 class="text-uppercase fw-bold mb-1">
                                        Lee Chong Wei
                                        <span class="text-muted ps-3">closed</span>
                                    </h6>
                                    <span class="text-muted">Is there any update plan for RTL version near
                                        future?</span>
                                </div>
                                <div class="float-end pt-1">
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            <div class="d-flex">
                                <div class="avatar avatar-offline">
                                    <span class="avatar-title rounded-circle border border-white bg-secondary">P</span>
                                </div>
                                <div class="flex-1 ms-3 pt-1">
                                    <h6 class="text-uppercase fw-bold mb-1">
                                        Peter Parker
                                        <span class="text-success ps-3">open</span>
                                    </h6>
                                    <span class="text-muted">I have some query regarding the license issue.</span>
                                </div>
                                <div class="float-end pt-1">
                                    <small class="text-muted">2 Day Ago</small>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            <div class="d-flex">
                                <div class="avatar avatar-away">
                                    <span class="avatar-title rounded-circle border border-white bg-danger">L</span>
                                </div>
                                <div class="flex-1 ms-3 pt-1">
                                    <h6 class="text-uppercase fw-bold mb-1">
                                        Logan Paul <span class="text-muted ps-3">closed</span>
                                    </h6>
                                    <span class="text-muted">Is there any update plan for RTL version near
                                        future?</span>
                                </div>
                                <div class="float-end pt-1">
                                    <small class="text-muted">2 Days Ago</small>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
