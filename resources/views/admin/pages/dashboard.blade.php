@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')

    <div class="container">
        <div class="page-inner">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row pt-2 pb-4">
                <div>
                    <h3 class="fw-bold mb-3">Dashboard</h3>
                    <h6 class="op-7 mb-2">Free Bootstrap 5 Admin Dashboard</h6>
                </div>
                <div class="ms-md-auto py-2 py-md-0">
                    <a href="#" class="btn btn-label-info btn-round me-2">Manage</a>
                    <a href="#" class="btn btn-primary btn-round">Add Customer</a>
                </div>
            </div>
            <div class="row row-card-no-pd">
                <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6><b>Todays Income</b></h6>
                                    <p class="text-muted">All Customs Value</p>
                                </div>
                                <h4 class="text-info fw-bold">$170</h4>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-info w-75" role="progressbar" aria-valuenow="75"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Change</p>
                                <p class="text-muted mb-0">75%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6><b>Total Revenue</b></h6>
                                    <p class="text-muted">All Customs Value</p>
                                </div>
                                <h4 class="text-success fw-bold">$120</h4>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-success w-25" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Change</p>
                                <p class="text-muted mb-0">25%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6><b>New Orders</b></h6>
                                    <p class="text-muted">Fresh Order Amount</p>
                                </div>
                                <h4 class="text-danger fw-bold">15</h4>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-danger w-50" role="progressbar" aria-valuenow="50"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Change</p>
                                <p class="text-muted mb-0">50%</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-6 col-xl-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h6><b>New Users</b></h6>
                                    <p class="text-muted">Joined New User</p>
                                </div>
                                <h4 class="text-secondary fw-bold">12</h4>
                            </div>
                            <div class="progress progress-sm">
                                <div class="progress-bar bg-secondary w-25" role="progressbar" aria-valuenow="25"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="d-flex justify-content-between mt-2">
                                <p class="text-muted mb-0">Change</p>
                                <p class="text-muted mb-0">25%</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="h1 fw-bold float-end text-primary">+5%</div>
                            <h2 class="mb-2">17</h2>
                            <p class="text-muted">Users online</p>
                            <div class="pull-in sparkline-fix">
                                <div id="lineChart"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="h1 fw-bold float-end text-danger">-3%</div>
                            <h2 class="mb-2">27</h2>
                            <p class="text-muted">New Users</p>
                            <div class="pull-in sparkline-fix">
                                <div id="lineChart2"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="h1 fw-bold float-end text-warning">+7%</div>
                            <h2 class="mb-2">213</h2>
                            <p class="text-muted">Transactions</p>
                            <div class="pull-in sparkline-fix">
                                <div id="lineChart3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Top Products</div>
                        </div>
                        <div class="card-body pb-0">
                            <div class="d-flex">
                                <div class="avatar">
                                    <img src="{{ asset('assets/admin') }}/img/logoproduct.svg" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                                <div class="flex-1 pt-1 ms-2">
                                    <h6 class="fw-bold mb-1">J.CO Donuts</h6>
                                    <small class="text-muted">The Best Donuts</small>
                                </div>
                                <div class="d-flex ms-auto align-items-center">
                                    <h4 class="text-info fw-bold">+$300</h4>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            <div class="d-flex">
                                <div class="avatar">
                                    <img src="{{ asset('assets/admin') }}/img/logoproduct3.svg" alt="..."
                                        class="avatar-img rounded-circle">
                                </div>
                                <div class="flex-1 pt-1 ms-2">
                                    <h6 class="fw-bold mb-1">Ready Pro</h6>
                                    <small class="text-muted">Bootstrap 5 Admin Dashboard</small>
                                </div>
                                <div class="d-flex ms-auto align-items-center">
                                    <h4 class="text-info fw-bold">+$350</h4>
                                </div>
                            </div>
                            <div class="separator-dashed"></div>
                            <div class="pull-in">
                                <canvas id="topProductsChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title fw-mediumbold">Suggested People</div>
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
                                    <button class="btn btn-icon btn-primary btn-round btn-xs">
                                        <i class="fa fa-plus"></i>
                                    </button>
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
                                    <button class="btn btn-icon btn-primary btn-round btn-xs">
                                        <i class="fa fa-plus"></i>
                                    </button>
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
                                    <button class="btn btn-icon btn-primary btn-round btn-xs">
                                        <i class="fa fa-plus"></i>
                                    </button>
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
                                    <button class="btn btn-icon btn-primary btn-round btn-xs">
                                        <i class="fa fa-plus"></i>
                                    </button>
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
                                    <button class="btn btn-icon btn-primary btn-round btn-xs">
                                        <i class="fa fa-plus"></i>
                                    </button>
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
                                    <button class="btn btn-icon btn-primary btn-round btn-xs">
                                        <i class="fa fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-head-row">
                                <div class="card-title">Support Tickets</div>
                                <div class="card-tools">
                                    <ul class="nav nav-pills nav-secondary nav-pills-no-bd nav-sm" id="pills-tab"
                                        role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-today" data-bs-toggle="pill"
                                                href="#pills-today" role="tab" aria-selected="true">Today</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link active" id="pills-week" data-bs-toggle="pill"
                                                href="#pills-week" role="tab" aria-selected="false">Week</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="pills-month" data-bs-toggle="pill"
                                                href="#pills-month" role="tab" aria-selected="false">Month</a>
                                        </li>
                                    </ul>
                                </div>
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
