@extends('layouts.customer', ['titlePage' => 'Menu\'s'])

@section('content')
  <div class="container-fluid py-4">
    
    <div class="row justify-content-center">
      @forelse ($menus as $menu)
          <div class="col-md-4">
            <div class="card m-4">
            <img class="card-img-top" src="{{ asset($menu->foto) }}" style="object-fit: cover;" height="350" alt="Card image cap">
              <h5 class="h5 p-2 card-title text-center text-capitalize">
                {{ $menu->nama_menu }}
              </h5>
              <div class="card-body">
                <p><b>Harga:</b> Rp. {{ number_format($menu->harga,0,',','.') }} <br>
                  <b>Qty:</b> {{ $menu->ketersediaan }} <br>
                  <b>Deskripsi:</b> {{ $menu->deskripsi }} <br>
                  <b>Kategori:</b> {{ $menu->kategori }}</p>
                <div class="row justify-content-center">
                  <div class="col-6">
                    <a href="{{ route('pelanggan.menu.show', $menu->nama_menu) }}" class="btn text-info" data-toggle="tooltip" data-original-title="Lihat Menu">
                      <i class="material-icons">visibility</i> <small>show</small>
                    </a>
                  </div>
                  <div class="col-6">
                    <a href="{{ route('pelanggan.buy-menu', $menu->nama_menu) }}" class="btn text-info" data-toggle="tooltip" data-original-title="Pesan Menu">
                      <i class="material-icons">restaurant</i> <small>Pesan</small>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      @empty
          <h3 class="h3 text-center">Tidak ada menu</h3>
      @endforelse
    </div>
@endsection