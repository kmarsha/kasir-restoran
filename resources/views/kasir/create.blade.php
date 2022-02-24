@extends('layouts.app', ['titlePage' => 'Create Transaction', 'activePage' => 'transaksi-kasir'])

@section('breadcrumb')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Kasir</a></li>
      <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="{{ route('kasir.transaction.index') }}">Transaction</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Create Transaction</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Create Transaction</h6>
  </nav>
@endsection

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Create Transaction</h6>
            </div>
          </div>
          <div class="card-body px-4 pb-2">
            @include('_partials.alert-error')
            <form class="form" action="{{ route('kasir.transaction.store') }}" method="post">
              @csrf
                <div class="my-3">
                  <div class="input-group input-group-outline @error('nama_pelanggan') has-danger @enderror">
                    <label class="form-label">Nama Pelanggan</label>
                    <input type="text" value="{{ old('nama_pelanggan') }}" name="nama_pelanggan" class="form-control">
                  </div>
                  @error('nama_pelanggan')
                  <div id="nama_pelanggan-error" class="error text-danger pl-3" for="nama_pelanggan" style="display: block;">
                    <small>{{ $errors->first('nama_pelanggan') }}</small>
                  </div>
                  @enderror
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <div class="my-3">
                      <label class="form-label">Menu</label>
                      <div class="input-group input-group-outline @error('nama_menu') has-danger @enderror">
                        <input type="text" list="menuOptions" name="nama_menu" class="form-control" autocomplete="off" value="{{ old('nama_menu') }}" onchange="harga_total()" placeholder="Type to search">
                        <datalist id="menuOptions">
                          @foreach ($menus as $menu)
                              <option data-id="{{ $menu->id-1 }}" value="{{ $menu->nama_menu }}">{{ $menu->deskripsi }}</option>
                          @endforeach
                        </datalist>
                      </div>
                      @error('nama_menu')
                        <div id="nama_menu-error" class="error text-danger pl-3" for="nama_menu" style="display: block;">
                          <small>{{ $errors->first('nama_menu') }}</small>
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="my-3">
                      <label class="form-label">Jumlah</label>
                      <div class="input-group input-group-outline @error('jumlah') has-danger @enderror">
                        <input type="number" value="{{ old('jumlah') }}" onchange="harga_total()" min="1" name="jumlah" placeholder="1" class="form-control">
                      </div>
                      @error('jumlah')
                        <div id="jumlah-error" class="error text-danger pl-3" for="jumlah" style="display: block;">
                          <small>{{ $errors->first('jumlah') }}</small>
                        </div>
                      @enderror
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="my-3">
                      <label class="form-label">Total Harga</label>
                      <div class="input-group input-group-outline">
                        <input type="text" value="{{ old('total_harga') }}" id="total_harga" name="total_harga" class="form-control" readonly>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="text-end">
                <button type="submit" class="text-uppercase btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection

@push('js')
    <script>
      function harga_total() {
        var nama_menu = $("input[name=nama_menu]").val()
          @foreach ($menus as $menu)
            if ('{{ $menu->nama_menu }}' == nama_menu){
              var jumlah = $("input[name=jumlah]").val()
              var menu_id = '{{ $menu->id }}' -1
              var harga_menu = `{{ $harga[$menu->id-1]->harga }}`
              var total = harga_menu * jumlah
              var total_harga = (total/1000).toFixed(3)
              $("input[name=total_harga]").val(total)
            }
          @endforeach
      }
    </script>
@endpush