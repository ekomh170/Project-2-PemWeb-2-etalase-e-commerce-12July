<!-- Sidebar -->
<div class="sidebar sidebar-style-2" data-background-color="dark2">

    <div class="sidebar-logo">
        <!-- Logo Header -->
        <div class="logo-header" data-background-color="dark2">
            <a href="{{ route('dashboardAdmin') }}" class="logo">
                <span class="navbar-brand"
                    style="
                    font-family: 'Roboto', sans-serif;
                    font-size: 20px;
                    font-weight: bold;
                    color: orange;
                    transition: color 0.3s ease;
                "
                    onmouseover="this.style.color='#ff7518'" onmouseout="this.style.color='orange'">
                    TESTI MART
                </span>
            </a>
            <div class="nav-toggle">
                <button class="btn btn-toggle toggle-sidebar"
                    style="
                    border: none;
                    background: transparent;
                    cursor: pointer;
                    transition: transform 0.3s ease;
                "
                    onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                    <i class="gg-menu-right" style="font-size: 24px; color: white;"></i>
                </button>
                <button class="btn btn-toggle sidenav-toggler"
                    style="
                    border: none;
                    background: transparent;
                    cursor: pointer;
                    transition: transform 0.3s ease;
                "
                    onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'">
                    <i class="gg-menu-left" style="font-size: 24px; color: white;"></i>
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
                        <img src="{{ Auth::user()->profile->foto ? asset('storage/' . Auth::user()->profile->foto) : 'assets/img/default-avatar.png' }}"
                            alt="{{ Auth::user()->name }}." class="avatar-img rounded-circle">
                    </div>
                    <div class="avatar avatar-minimize avatar-md mb-3 d-none">
                        <img src="{{ Auth::user()->profile->foto ? asset('storage/' . Auth::user()->profile->foto) : 'assets/img/default-avatar.png' }}"
                            alt="{{ Auth::user()->name }}" class="avatar-img rounded-circle">
                    </div>
                    <span class="user-name fw-bold mb-1">{{ Auth::user()->name }}</span>
                    <span class="user-level op-7">{{ Auth::user()->role }}</span>
                </div>
            </div>

            <ul class="nav nav-secondary">
                <!-- Halaman Utama -->
                <li class="nav-item {{ Route::is('landing.index') ? 'active' : '' }}">
                    <a href="{{ route('landing.index') }}">
                        <i class="fas fa-home"></i>
                        <p>Halaman Utama Web</p>
                    </a>
                </li>
                <!-- End Halaman Utama -->

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
                <li class="nav-item {{ Route::is('profileAdmin.show', 'profileAdmin.edit') ? 'active' : '' }}">
                    <a data-bs-toggle="collapse" href="#base">
                        <i class="fas fa-user"></i>
                        <p>Profile</p>
                        <span class="caret"></span>
                    </a>
                    <div class="collapse {{ Route::is('profileAdmin.show', 'profileAdmin.edit') ? 'show' : '' }}"
                        id="base">
                        <ul class="nav nav-collapse">
                            <li class="{{ Route::is('profileAdmin.show') ? 'active' : '' }}">
                                <a href="{{ route('profileAdmin.show', ['profileAdmin' => Auth::user()->id]) }}">
                                    <span class="sub-item">Lihat Profile</span>
                                </a>
                            </li>
                            <li class="{{ Route::is('profileAdmin.edit') ? 'active' : '' }}">
                                <a href="{{ route('profileAdmin.edit', ['profileAdmin' => Auth::user()->id]) }}">
                                    <span class="sub-item">Edit Profile</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <!-- End Profile -->

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
                    <form id="logout-form" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a href="#" onclick="event.preventDefault(); konfirmasiLogout();">
                            <i class="fas fa-home"></i>
                            <p>Logout</p>
                        </a>
                    </form>
                </li>

                <!-- Sweet Alert JS -->
                <script>
                    function konfirmasiLogout() {
                        Swal.fire({
                            title: 'Anda yakin?',
                            text: "Anda akan keluar!",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, keluar!'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                document.getElementById('logout-form').submit();
                            }
                        });
                    }
                </script>
                <!-- Sweet Alert JS -->
                <!-- End Logout -->

            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
