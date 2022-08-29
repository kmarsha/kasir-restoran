@extends('layouts.customer', ['titlePage' => 'Show Menu'])

@section('breadcrumb')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Menu's</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Menu's</h6>
  </nav>
@endsection

@section('content')
  <div class="container-fluid pb-4">
    <div class="row">
      <div class="col-12">
        <div class="card m-4">
          <div class="card-body p-4">
            <div class="row">
              <div class="col-md-3">
                <img class="img-fluid card-img" src="{{ asset($menu->foto) }}" style="object-fit: cover;" alt="Menu image cap">
              </div>
              <div class="col-md-9">
                <h1 class="display-2">{{ $menu->nama_menu }}</h1>
                <h4>{{ $menu->deskripsi }}</h4>
                <h6>Rp. {{ number_format($menu->harga,0,',','.') }}</h6>
                <a href="{{ route('pelanggan.buy-menu', $menu->nama_menu) }}" class="btn btn-fill btn-info float-right" data-toggle="tooltip" data-original-title="Pesan Menu">
                  <i class="material-icons">restaurant</i> <small>Pesan</small>
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection