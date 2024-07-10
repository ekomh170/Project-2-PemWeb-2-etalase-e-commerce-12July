<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="dark">
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark">
            <a href="{{ route('dashboard') }}" class="logo">
                <img src="{{ asset('assets/admin') }}/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand"
                    height="20" />
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar">
                    <i class="gg-menu-right"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler">
                    <i class="gg-menu-left"></i>
                </button>
            </div>
        </div>
        <!-- End Logo Header -->
    </div>
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <ul class="nav nav-secondary">
                {{-- Dashboard --}}
                <li class="nav-item {{ Route::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('dashboard') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                {{-- Dashboard --}}

                {{-- Set Users --}}
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Set Users</h4>
                </li>
                {{-- Set Users --}}

                {{-- Profile --}}
                <li class="nav-item {{ Route::is('profile.edit') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-user"></i>
                        <p>Profile</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('profile.edit') ? 'show' : '' }}" id="base">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('profile.edit') ? 'active' : '' }}">
                                <a href="{{ route('profile.edit') }}">
                                    <span class="sub-item">Edit Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- Profile --}}

                {{-- Reset Password --}}
                <li class="nav-item {{ Route::is('password.reset') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-key"></i>
                        <p>Reset Password</p>
                    </a>
                </li>
                {{-- Reset Password --}}

                {{-- Master Data --}}
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>
                {{-- Master Data --}}

                {{-- Produk --}}
                <li class="nav-item {{ Route::is('produk.*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#produk">
                        <i class="fab fa-product-hunt"></i>
                        <p>Produk</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('produk.*') ? 'show' : '' }}" id="produk">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('produk.create') ? 'active' : '' }}">
                                <a href="{{ route('produk.create') }}">
                                    <span class="sub-item">Tambah Data</span>
                                </a>
                            </li>
                            <li class="{{ Route::is('produk.index') ? 'active' : '' }}">
                                <a href="{{ route('produk.index') }}">
                                    <span class="sub-item">List Data</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- Produk --}}

                {{-- Testimoni --}}
                <li class="nav-item {{ Route::is('testimoni.index') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#tables">
                        <i class="fas fa-comments"></i>
                        <p>Testimoni</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('testimoni.index') ? 'show' : '' }}" id="tables">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('testimoni.index') ? 'active' : '' }}">
                                <a href="{{ route('testimoni.create') }}">
                                    <span class="sub-item">Tambah Data</span>
                                </a>
                                <a href="{{ route('testimoni.index') }}">
                                    <span class="sub-item">List Data</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- Testimoni --}}

                {{-- Master Pengelompokan --}}
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Pengelompokan</h4>
                </li>
                {{-- Master Pengelompokan --}}

                {{-- Jenis Produk --}}
                <li class="nav-item {{ Route::is('jenisProduk.*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#sidebarLayouts">
                        <i class="fas fa-th-list"></i>
                        <p>Jenis Produk</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('jenisProduk.*') ? 'show' : '' }}" id="sidebarLayouts">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('jenisProduk.create') ? 'active' : '' }}">
                                <a href="{{ route('jenisProduk.create') }}">
                                    <span class="sub-item">Tambah Data</span>
                                </a>
                            </li>
                            <li class="{{ Route::is('jenisProduk.index') ? 'active' : '' }}">
                                <a href="{{ route('jenisProduk.index') }}">
                                    <span class="sub-item">List Data</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- Jenis Produk --}}

                {{-- Kategori Tokoh --}}
                <li class="nav-item {{ Route::is('kategoriTokoh.*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#kategoriTokoh">
                        <i class="fas fa-th-list"></i>
                        <p>Kategori Tokoh</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('kategoriTokoh.*') ? 'show' : '' }}" id="kategoriTokoh">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('kategoriTokoh.create') ? 'active' : '' }}">
                                <a href="{{ route('kategoriTokoh.create') }}">
                                    <span class="sub-item">Tambah Data</span>
                                </a>
                                <a href="{{ route('kategoriTokoh.index') }}">
                                    <span class="sub-item">List Data</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- Kategori Tokoh --}}

                {{-- Konfigurasi --}}
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Konfigurasi</h4>
                </li>
                {{-- Konfigurasi --}}

                {{-- Account Users --}}
                <li class="nav-item {{ Route::is('accountUsers.*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#accountUsers">
                        <i class="fas fa-users"></i>
                        <p>Account Users</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('accountUsers.*') ? 'show' : '' }}" id="accountUsers">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('accountUsers.create') ? 'active' : '' }}">
                                <a href="#">
                                    <span class="sub-item">Tambah Data</span>
                                </a>
                                <a href="#">
                                    <span class="sub-item">List Data</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- Account Users --}}

                {{-- Keluar Administrator --}}
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Keluar Administrator</h4>
                </li>
                {{-- Keluar Administrator --}}

                {{-- Logout --}}
                <li class="nav-item">
                    <a href="{{ route('logout') }}">
                        <i class="fas fa-home"></i>
                        <p>Logout</p>
                    </a>
                </li>
                {{-- Logout --}}
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
