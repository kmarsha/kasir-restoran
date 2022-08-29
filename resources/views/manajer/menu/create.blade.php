@extends('layouts.app', ['titlePage' => 'Create Menu', 'activePage' => 'menu-manajer'])

@section('breadcrumb')
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Pages</a></li>
      <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="#">Manajer</a></li>
      <li class="breadcrumb-item text-sm text-dark"><a class="opacity-5 text-dark" href="{{ route('manajer.menu.index') }}">Menu's</a></li>
      <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Create Menu</li>
    </ol>
    <h6 class="font-weight-bolder mb-0">Create Menu</h6>
  </nav>
@endsection

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Create Menu</h6>
            </div>
          </div>
          <div class="card-body px-4 pb-2">
            @include('_partials.alert-error')
            <form class="form" action="{{ route('manajer.menu.store') }}" enctype="multipart/form-data" method="post">
              @csrf
                <div class="my-3">
                  <label class="form-label">Nama Menu</label>
                  <div class="input-group input-group-outline @error('nama_menu') has-danger @enderror">
                    <input type="text" name="nama_menu" class="form-control" value="{{ old('nama_menu') }}">
                  </div>
                  @error('nama_menu')
                    <div id="nama_menu-error" class="error text-danger pl-3" for="nama_menu" style="display: block;">
                      <small>{{ $errors->first('nama_menu') }}</small>
                    </div>
                  @enderror
                </div>

                <div class="my-3">
                  <label class="">Harga</label>
                  <div class="input-group input-group-outline @error('harga') has-danger @enderror">
                    <input type="number" placeholder="Rp. 1000" min="500" name="harga" class="form-control">
                  </div>
                  @error('harga')
                    <div id="harga-error" class="error text-danger pl-3" for="harga" style="display: block;">
                      <small>{{ $errors->first('harga') }}</small>
                    </div>
                  @enderror
                </div>

                <div class="my-3">
                  <label class="form-label">Deskripsi</label>
                  <div class="input-group input-group-outline @error('desc') has-danger @enderror">
                    <textarea name="desc" class="form-control" rows="3"></textarea>
                  </div>
                  @error('desc')
                    <div id="desc-error" class="error text-danger pl-3" for="desc" style="display: block;">
                      <small>{{ $errors->first('desc') }}</small>
                    </div>
                  @enderror
                </div>

                <div class="my-3">
                  <label class="form-label">Foto Menu</label>
                  <div class="input-group input-group-outline @error('foto') has-danger @enderror">
                    <input type="file" id="inputFotoMenu" accept="image/png, image/jpeg" name="foto" class="form-control">
                  </div>
                  @error('foto')
                    <div id="foto-error" class="error text-danger pl-3" for="foto" style="display: block;">
                      <small>{{ $errors->first('foto') }}</small>
                    </div>
                  @enderror
                </div>

                <div class="my-3">
                  <label class="form-label">Kategori @error('kategori')
                    <small class="text-danger">({{ $errors->first('kategori') }})</small>
                  @enderror</label>
                  <div class="input-group input-group-outline form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="kategori" id="kategori1" value="makanan"> Makanan
                    </label>
                  </div>
                  <div class="input-group input-group-outline form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" type="radio" name="kategori" id="kategori2" value="minuman"> Minuman
                    </label>
                  </div>
                </div>

                <div class="my-3">
                  <label class="form-label">Ketersediaan</label>
                  <div class="input-group input-group-outline @error('ketersediaan') has-danger @enderror">
                    <input type="number" placeholder="1" min="0" name="ketersediaan" class="form-control">
                  </div>
                  @error('ketersediaan')
                    <div id="ketersediaan-error" class="error text-danger pl-3" for="ketersediaan" style="display: block;">
                      <small>{{ $errors->first('ketersediaan') }}</small>
                    </div>
                  @enderror
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