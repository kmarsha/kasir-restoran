<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <span class="navbar-brand font-weight-bold" style="font-size: 2.5em">Cafe Bisa Ngopi <img src="{{ asset('assets/img/icon1.png') }}" alt="logo" width="40" height="40"></span>
  <div class="container-fluid py-1 px-3">
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        <div class="input-group input-group-outline">
          <label class="form-label">Type here...</label>
          <input type="text" class="form-control">
        </div>
      </div>
      <ul class="navbar-nav  justify-content-end">
        @auth()
            @if(Auth::user()->role == 'admin')
              <li title="Dashboard" class="nav-item d-flex align-items-center">
                <a href="{{ route('admin.registration.index') }}" class="nav-link text-body font-weight-bold px-0">
                  <i class="material-icons">account_circle</i>
                </a>
              </li>
            @elseif(Auth::user()->role == 'kasir')
              <li title="Dashboard" class="nav-item d-flex align-items-center">
                <a href="{{ route('kasir.transaction.index') }}" class="nav-link text-body font-weight-bold px-0">
                  <i class="material-icons">account_circle</i>
                </a>
              </li>
            @elseif(Auth::user()->role == 'manajer')
              <li title="Dashboard" class="nav-item d-flex align-items-center">
                <a href="{{ route('manajer.dashboard') }}" class="nav-link text-body font-weight-bold px-0">
                  <i class="material-icons">account_circle</i>
                </a>
              </li>
            @endif
            <li title="Home" class="nav-item d-flex p-2 align-items-center">
              <a href="{{ route('welcome') }}" class="nav-link text-body font-weight-bold px-0">
                <i class="material-icons">home</i>
              </a>
            </li>
        @endauth
        
        <li class="nav-item d-xl-none d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body px-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li>
        {{-- <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0">
            <i class="material-icons fixed-plugin-button-nav cursor-pointer">settings</i>
          </a>
        </li> --}}
        <li rel="tooltip" title="Logout" class="nav-item dropdown p-2 d-flex align-items-center">
          <a href="#" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="material-icons">logout</i>
          </a>
          <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->