@extends('layouts.customer', ['titlePage' => 'Pembelian'])

@section('breadcrumb')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Pembelian</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Pembelian</h6>
  </nav>
@endsection

@section('content')
    <div class="container-fluid py-4">
      <div class="card card-default">
        <div class="card-header">
          <h2 class="card-title">Pembelian</h2>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row px-md-4">
            <h4>Pembelian Hari Ini ( @isset($total_bayar) <i>Rp. {{ number_format($total_bayar,2,',','.') }}</i> @else - @endisset )</h4>
            @forelse ($data_hari_ini as $data)
              <div class="col-md-4">
                <div class="card m-4">
                <img class="card-img-top" src="{{ asset($data->menu->foto) }}" style="object-fit: cover;" height="250" alt="Card image cap">
                  <h5 class="h5 p-2 card-title text-center text-capitalize">
                    {{ $data->menu->nama_menu }}
                  </h5>
                  <div class="card-body">
                    <p class="text-capitalize"><b>Harga:</b> Rp. {{ number_format($data->menu->harga,0,',','.') }} <br>
                      <b>Kategori:</b> {{ $data->menu->kategori }}</p>
                      <hr>
                    <p><b>Total Beli:</b> {{ $data->jumlah }} <br>
                      <b>Total Harga:</b> Rp. {{ number_format($data->total_harga, 0, ',', '.') }}</p>
                      <hr>

                    <p class="text-end"><i>{{ $data->created_at->diffForHumans() }}</i></p>
                  </div>
                </div>
              </div>
            @empty
                <h3 class="h5 text-center">Belum ada Pembelian Hari Ini</h3>
            @endforelse
          </div>
          <div class="row px-md-4">
            <h4>Pembelian Sebelumnya</h4>
            @forelse ($data_keseluruhan as $data)
              <div class="col-md-4">
                <div class="card m-4">
                <img class="card-img-top" src="{{ asset($data->menu->foto) }}" style="object-fit: cover;" height="250" alt="Card image cap">
                  <h5 class="h5 p-2 card-title text-center text-capitalize">
                    {{ $data->menu->nama_menu }}
                  </h5>
                  <div class="card-body">
                    <p class="text-capitalize"><b>Harga:</b> Rp. {{ number_format($data->menu->harga,0,',','.') }} <br>
                      <b>Kategori:</b> {{ $data->menu->kategori }}</p>
                      <hr>
                    <p><b>Total Beli:</b> {{ $data->jumlah }} <br>
                      <b>Total Harga:</b> Rp. {{ number_format($data->total_harga, 0, ',', '.') }}</p>
                      <hr>
                    <p class="text-end"><i>{{ $data->created_at->diffForHumans() }}</i></p>
                  </div>
                </div>
              </div>
            @empty
                <h3 class="h5 text-center">Tidak ada Pembelian</h3>
            @endforelse
          </div>
        </div>
      </div>
    </div>
@endsection