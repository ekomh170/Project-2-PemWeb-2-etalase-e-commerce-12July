<div class="main-header">
  <div class="main-header-logo">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="dark2">
      <a href="index.html" class="logo">
        {{-- <img
          src="{{ asset('assets/admin')}}/img/kaiadmin/logo_light.svg"
          alt="navbar brand"
          class="navbar-brand"
          height="20"
        /> --}}
      </a>
      <button
        class="navbar-toggler sidenav-toggler ms-auto"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="collapse"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon">
          <i class="gg-menu-left"></i>
        </span>
      </button>
      <button class="topbar-toggler more">
        <i class="gg-more-vertical-alt"></i>
      </button>
    </div>
    <!-- End Logo Header -->
  </div>
  <!-- Navbar Header -->
  <nav
    class="navbar navbar-header navbar-header-transparent navbar-expand-lg border-bottom"
  >
    <div class="container-fluid">
      <nav class="navbar navbar-header-left navbar-expand-lg navbar-form nav-search p-0 d-none d-lg-flex">
      </nav>

      <ul class="navbar-nav topbar-nav ms-md-auto align-items-center">
        <li class="nav-item topbar-icon dropdown hidden-caret">
          <a
            class="nav-link"
            data-bs-toggle="dropdown"
            href="#"
            aria-expanded="false"
          >
            <i class="fas fa-layer-group"></i>
          </a>
          <div class="dropdown-menu quick-actions animated fadeIn">
            <div class="quick-actions-header">
              <span class="title mb-1">Quick Actions</span>
              <span class="subtitle op-7">Shortcuts</span>
            </div>
            <div class="quick-actions-scroll scrollbar-outer">
              <div class="quick-actions-items">
                <div class="row m-0">
                  <a class="col-6 col-md-4 p-0" href="{{ route('produk.index') }}">
                    <div class="quick-actions-item">
                      <div class="avatar-item bg-danger rounded-circle">
                        <i class="fab fa-product-hunt"></i>
                      </div>
                      <span class="text">Produk</span>
                    </div>
                  </a>
                  <a class="col-6 col-md-4 p-0" href="{{ route('testimoni.index') }}">
                    <div class="quick-actions-item">
                      <div
                        class="avatar-item bg-warning rounded-circle"
                      >
                        <i class="fas fa-comments"></i>
                      </div>
                      <span class="text">Testimoni</span>
                    </div>
                  </a>
                  <a class="col-6 col-md-4 p-0" href="{{ route('jenisProduk.index') }}">
                    <div class="quick-actions-item">
                      <div class="avatar-item bg-info rounded-circle">
                        <i class="fas fa-th-list"></i>
                      </div>
                      <span class="text">Jenis Produk</span>
                    </div>
                  </a>
                  <a class="col-6 col-md-4 p-0" href="{{ route('kategoriTokoh.index') }}">
                    <div class="quick-actions-item">
                      <div
                        class="avatar-item bg-success rounded-circle"
                      >
                        <i class="fas fa-th-list"></i>
                      </div>
                      <span class="text">Kategori Tokoh</span>
                    </div>
                  </a>
                  <a class="col-6 col-md-4 p-0" href="{{ route('user.index') }}">
                    <div class="quick-actions-item">
                      <div
                        class="avatar-item bg-primary rounded-circle"
                      >
                        <i class="fas fa-users"></i>
                      </div>
                      <span class="text">Account Users</span>
                    </div>
                  </a>
                  <a class="col-6 col-md-4 p-0" href="{{ route('profileAdmin.show', ['profileAdmin' => Auth::user()->id]) }}">
                    <div class="quick-actions-item">
                      <div
                        class="avatar-item bg-secondary rounded-circle"
                      >
                        <i class="fas fa-user"></i>
                      </div>
                      <span class="text">Profile </span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </li>

        <li class="nav-item topbar-user dropdown hidden-caret">
          <a
            class="dropdown-toggle profile-pic"
            data-bs-toggle="dropdown"
            href="#"
            aria-expanded="false"
          >
            <div class="avatar-sm">
              <img
                src="{{ Auth::user()->profile->foto ? asset('storage/' . Auth::user()->profile->foto) : asset('assets/admin/img/profile.jpg') }}"
                alt="{{ Auth::user()->name }}"
                class="avatar-img rounded-circle"
              />
            </div>
            <span class="profile-username">
              <span class="op-7">Hi,</span>
              <span class="fw-bold">{{ Auth::user()->name }}</span>
            </span>
          </a>
          <ul class="dropdown-menu dropdown-user animated fadeIn">
            <div class="dropdown-user-scroll scrollbar-outer">
              <li>
                  <div class="user-box">
                      <div class="avatar-lg">
                          <img src="{{ Auth::user()->profile->foto ? asset('storage/' . Auth::user()->profile->foto) : asset('assets/admin/img/profile.jpg') }}" alt="image profile" class="avatar-img rounded" />
                      </div>
                      <div class="u-text">
                          <h4>{{ Auth::user()->name }}</h4>
                          <p class="text-muted">{{ Auth::user()->email }}</p>
                          <a href="{{ route('profileAdmin.show', Auth::user()->id) }}" class="btn btn-xs btn-secondary btn-sm">View Profile</a>
                      </div>
                  </div>
              </li>
              <li>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('profileAdmin.show', Auth::user()->id) }}">My Profile</a>
                  {{-- <a class="dropdown-item" href="{{ route('password.change') }}">Ganti Password</a> --}}
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </li>
          </div>
          
          </ul>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End Navbar -->
</div>