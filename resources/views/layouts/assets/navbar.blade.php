<!-- Navbar -->
<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
  <span class="navbar-brand font-weight-bold" style="font-size: 2.5em">Our Café <img src="{{ asset('assets/img/icon1.png') }}" alt="logo" width="40" height="40"></span>
  <div class="container-fluid py-1 px-3">
    <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
      <div class="ms-md-auto pe-md-3 d-flex align-items-center">
        {{-- <div class="input-group input-group-outline">
          <label class="form-label">Type here...</label>
          <input type="text" class="form-control">
        </div> --}}
      </div>
      <ul class="navbar-nav justify-content-end">
        @auth()
            @admin
              <li title="Dashboard" class="nav-item d-flex align-items-center">
                <a href="{{ route('admin.registration.index') }}" class="nav-link text-body font-weight-bold px-0">
                  <i class="material-icons">account_circle</i>
                </a>
              </li>
            @endadmin

            @kasir
              <li title="Dashboard" class="nav-item d-flex align-items-center">
                <a href="{{ route('kasir.transaction.index') }}" class="nav-link text-body font-weight-bold px-0">
                  <i class="material-icons">account_circle</i>
                </a>
              </li>
            @endkasir

            @manajer
              <li title="Dashboard" class="nav-item d-flex align-items-center">
                <a href="{{ route('manajer.dashboard') }}" class="nav-link text-body font-weight-bold px-0">
                  <i class="material-icons">account_circle</i>
                </a>
              </li>
            @endmanajer
            <li title="Home" class="nav-item d-flex p-2 align-items-center">
              <a href="{{ route('welcome') }}" class="nav-link text-body font-weight-bold px-0">
                <i class="material-icons">home</i>
              </a>
            </li>
        @endauth

        @customer
          @guest
            <li title="Home" class="nav-item d-flex p-1 align-items-center">
              <a href="{{ route('welcome') }}" class="nav-link text-body font-weight-bold px-0">
                <i class="material-icons">home</i>
              </a>
            </li>
          @endguest
          <li title="Menu" class="nav-item d-flex p-1 align-items-center">
            <a href="{{ route('pelanggan.menu.index') }}" class="nav-link text-body font-weight-bold px-0">
              <i class="material-icons">menu_book</i>
            </a>
          </li>
          @auth
            <li title="Transaksi" class="nav-item d-flex p-1 align-items-center">
              <a href="{{ route('pelanggan.transaksi.index') }}" class="nav-link text-body font-weight-bold px-0">
                <i class="material-icons">summarize</i>
              </a>
            </li> 
          @endauth
        @endcustomer
        
        {{-- <li class="nav-item px-3 d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body p-0">
            <i class="material-icons fixed-plugin-button-nav cursor-pointer">settings</i>
          </a>
        </li> --}}
        @auth
        <li title="Logout" class="nav-item d-flex p-1 align-items-center">
          <a href="#" data-bs-toggle="modal" data-bs-target="#logoutModal" class="nav-link px-0">
            <i class="material-icons">logout</i>
         </a>
        </li>
        @endauth
        
        {{-- <li class="nav-item d-xl-none d-flex align-items-center">
          <a href="javascript:;" class="nav-link text-body px-0" id="iconNavbarSidenav">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </a>
        </li> --}}
      </ul>
    </div>
  </div>
</nav>
<!-- End Navbar -->

@section('modals')
  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
      <div class="modal-content">
        <div class="modal-body">
          <h4 class="modal-title text-center" id="exampleModalLabel">Siap Untuk Pergi?</h4>
          {{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button> --}}
          <p class="text-center" style="font-size: 1.25em">
            Pilih "Logout" untuk Mengakhiri session.
          </p>
          <div class="text-center">
            <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Kembali</button>
            <a class="btn btn-primary" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
              <i class="fas fa-fw fa-sign-out-alt"></i>
                <span>Logout</span>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
              @csrf
            </form>
          </div>
      </div>
    </div>
  </div>
@endsection