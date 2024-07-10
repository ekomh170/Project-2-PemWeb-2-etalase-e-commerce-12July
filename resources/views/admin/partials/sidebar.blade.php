<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="dark2">
    
    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark2">
            <a href="{{ route('dashboardAdmin') }}" class="logo">
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
            <div class="profile-section">
                <div class="user-profile d-flex flex-column align-items-center text-center py-4">
                    <div class="avatar avatar-xl mb-3">
                        <img src="assets/img/profile2.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar avatar-minimize avatar-md mb-3 d-none">
                        <img src="assets/img/profile2.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                    <span class="user-name fw-bold mb-1">Hizrian Al-Asyi</span>
                    <span class="user-level op-7">Administrator</span>
                </div>

            </div>
            <ul class="nav nav-secondary">
                <!-- Dashboard -->
                <li class="nav-item {{ Route::is('dashboardAdmin') ? 'active' : '' }}">
                    <a href="{{ route('dashboardAdmin') }}">
                        <i class="fas fa-home"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <!-- End Dashboard -->

                <!-- Set Users -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Set Users</h4>
                </li>
                <!-- End Set Users -->

                <!-- Profile -->
                <li class="nav-item {{ Route::is('profileAdmin.index', 'profileAdmin.edit') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-user"></i>
                        <p>Profile</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('profileAdmin.index', 'profileAdmin.edit') ? 'show' : '' }}" id="base">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('profileAdmin.index') ? 'active' : '' }}">
                                <a href="{{ route('profileAdmin.index') }}">
                                    <span class="sub-item">Lihat Profile</span>
                                </a>
                            </li>
                            <li class="{{ Route::is('profileAdmin.edit') ? 'active' : '' }}">
                                <a href="{{ route('profileAdmin.edit', ['profileAdmin' => 1]) }}">
                                    <span class="sub-item">Edit Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                             
                <!-- End Profile -->

                <!-- Reset Password -->
                <li class="nav-item {{ Route::is('password.reset') ? 'active' : '' }}">
                    <a href="#">
                        <i class="fas fa-key"></i>
                        <p>Reset Password</p>
                    </a>
                </li>
                <!-- End Reset Password -->

                <!-- Master Data -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Data</h4>
                </li>
                <!-- End Master Data -->

                <!-- Produk -->
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
                <!-- End Produk -->

                <!-- Testimoni -->
                <li class="nav-item {{ Route::is('testimoni.*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#testimoni">
                        <i class="fas fa-comments"></i>
                        <p>Testimoni</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('testimoni.*') ? 'show' : '' }}" id="testimoni">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('testimoni.create') ? 'active' : '' }}">
                                <a href="{{ route('testimoni.create') }}">
                                    <span class="sub-item">Tambah Data</span>
                                </a>
                            </li>
                            <li class="{{ Route::is('testimoni.index') ? 'active' : '' }}">
                                <a href="{{ route('testimoni.index') }}">
                                    <span class="sub-item">List Data</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End Testimoni -->

                <!-- Master Pengelompokan -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Master Pengelompokan</h4>
                </li>
                <!-- End Master Pengelompokan -->

                <!-- Jenis Produk -->
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
                <!-- End Jenis Produk -->

                <!-- Kategori Tokoh -->
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
                            </li>
                            <li class="{{ Route::is('kategoriTokoh.index') ? 'active' : '' }}">
                                <a href="{{ route('kategoriTokoh.index') }}">
                                    <span class="sub-item">List Data</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End Kategori Tokoh -->

                <!-- Konfigurasi -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Konfigurasi</h4>
                </li>
                <!-- End Konfigurasi -->

                <!-- Account Users -->
                <li class="nav-item {{ Route::is('user.*') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#user">
                        <i class="fas fa-users"></i>
                        <p>Account Users</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('user.*') ? 'show' : '' }}" id="user">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('user.create') ? 'active' : '' }}">
                                <a href="{{ route('user.create') }}">
                                    <span class="sub-item">Tambah Data</span>
                                </a>
                            </li>
                            <li class="{{ Route::is('user.index') ? 'active' : '' }}">
                                <a href="{{ route('user.index') }}">
                                    <span class="sub-item">List Data</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End Account Users -->


                <!-- Keluar Administrator -->
                <li class="nav-section">
                    <span class="sidebar-mini-icon">
                        <i class="fa fa-ellipsis-h"></i>
                    </span>
                    <h4 class="text-section">Keluar Administrator</h4>
                </li>
                <!-- End Keluar Administrator -->

                <!-- Logout -->
                <li class="nav-item">
                    <a href="{{ route('logout') }}">
                        <i class="fas fa-home"></i>
                        <p>Logout</p>
                    </a>
                </li>
                <!-- End Logout -->
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
