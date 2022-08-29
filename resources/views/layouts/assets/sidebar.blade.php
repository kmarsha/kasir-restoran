<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">
  <div class="sidenav-header">
    <i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
    <a class="navbar-brand m-0" href="#">
      {{-- <img src="{{ asset('assets') }}/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo"> --}}
      <span class="font-weight-bold text-white" style="font-size: 1.5em">Our Café<img src="{{ asset('assets/img/icon1.png') }}" class="navbar-brand-img h-100" alt="main_logo"></span>
      {{-- <span class="material-icons navbar-brand-img vh-100 text-white" style="font-size: 1.5em"> --}}
      {{-- </span> --}}
    </a>
  </div>
  <hr class="horizontal light mt-0 mb-2">
  <div class="collapse navbar-collapse  w-auto  max-height-vh-100" id="sidenav-collapse-main">
    <ul class="navbar-nav">
      @admin
        <li class="nav-item">
          <a class="nav-link text-white {{ $activePage == 'user-admin' ? 'active bg-gradient-primary' : '' }}" href="{{ route('admin.registration.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">person</i>
            </div>
            <span class="nav-link-text ms-1">User</span>
          </a>
        </li>
      @endadmin

      @kasir
        <li class="nav-item">
          <a class="nav-link text-white {{ $activePage == 'transaksi-kasir' ? 'active bg-gradient-primary' : '' }}" href="{{ route('kasir.transaction.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">receipt_long</i>
            </div>
            <span class="nav-link-text ms-1">Transaksi</span>
          </a>
        </li>
      @endkasir

      @manajer
        <li class="nav-item">
          <a class="nav-link text-white {{ $activePage == 'dashboard-manajer' ? 'active bg-gradient-primary' : '' }}" href="{{ route('manajer.dashboard') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">dashboard</i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ $activePage == 'menu-manajer' ? 'active bg-gradient-primary' : '' }}" href="{{ route('manajer.menu.index') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">menu_book</i>
            </div>
            <span class="nav-link-text ms-1">Menu</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white {{ $activePage == 'laporan-manajer' ? 'active bg-gradient-primary' : '' }}" href="{{ route('manajer.laporan') }}">
            <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
              <i class="material-icons opacity-10">summarize</i>
            </div>
            <span class="nav-link-text ms-1">Laporan</span>
          </a>
        </li>
      @endmanajer
    </ul>
  </div>
  <div class="sidenav-footer position-absolute w-100 bottom-0 ">
    <div class="mx-3">
      {{-- <a class="btn bg-gradient-primary mt-4 w-100" href="https://www.creative-tim.com/product/material-dashboard-pro?ref=sidebarfree" type="button">Upgrade to pro</a> --}}
    </div>
  </div>
</aside>