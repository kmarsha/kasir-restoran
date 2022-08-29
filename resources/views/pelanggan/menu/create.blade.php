@extends('layouts.customer', ['titlePage' => 'Buy'])

@section('content')
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Buy {{ $selected_menu }} Menu</h6>
            </div>
          </div>
          <div class="card-body px-4 pb-2">
            @include('_partials.alert-error')
            <form class="form" action="{{ route('pelanggan.store-menu') }}" method="post">
              @csrf
                <input type="hidden" name="nama_pelanggan" value="{{ Auth::user()->name }}">

                <div id="list-menu">
                  <div class="row justify-content-center">
                    <div class="col-md-5">
                      <div class="my-3">
                        <label class="form-label">Menu</label>
                        <div class="form-group input-group input-group-outline @error('pesan[0][menu]') has-danger @enderror">
                          <select class="select2bs4 select-count disabled" name="pesan[0][menu]" id="pesan-0-menu" required>
                            @foreach ($menus as $menu)
                              <option value="{{ $menu->id }}" {{ ($selected_menu == $menu->nama_menu) ? 'selected="selected"' : '' }} data-id="0" data-menu-id="{{ $menu->id }}" data-harga="{{ $menu->harga }}">{{ $menu->nama_menu }}</option>
                            @endforeach
                          </select>
                        </div>
                        @error('pesan.0.menu')
                          <div id="menu-error" class="error text-danger pl-3" for="menu" style="display: block;">
                            <small>{{ $errors->first('pesan.0.menu') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Jumlah</label>
                        <div class="input-group input-group-outline @error('pesan[0][jumlah]') has-danger @enderror">
                          <input type="number" value="{{ (old('pesan[0][jumlah]')) ? old('pesan[0][jumlah]') : '1' }}" min="1" name="pesan[0][jumlah]" id="pesan-0-jumlah" placeholder="1" class="form-control jumlah-count" data-id="0"
                          @foreach ($menus as $menu)
                            @if ($selected_menu == $menu->nama_menu)
                            data-menu-id="{{ $menu->id }}" data-harga="{{ $menu->harga }}"
                            @endif
                          @endforeach required>
                        </div>
                        @error('pesan.0.jumlah')
                          <div id="jumlah-error" class="error text-danger pl-3" for="jumlah" style="display: block;">
                            <small>{{ $errors->first('pesan.0.jumlah') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="my-3">
                        <label class="form-label">Total Harga</label>
                        <div class="input-group input-group-outline">
                          <input type="text" value="{{ old('pesan[0][total_harga]') }}" id="pesan-0-total" name="pesan[0][total_harga]" class="form-control total" required readonly>
                        </div>
                        @error('pesan.0.total_harga')
                          <div id="total_harga-error" class="error text-danger pl-3" for="total_harga" style="display: block;">
                            <small>{{ $errors->first('pesan.0.total_harga') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Add Menu</label>
                        <div class="input-group input-group-outline">
                          <button class="btn btn-primary text-md" type="button" onclick="addMenu()" style="border-radius: 100%">+</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row justify-content-end">
                  <div class="col-md-2 col-6">
                    <div class="my-3">
                      <label class="form-label">Total Bayar</label>
                      <div class="input-group input-group-outline">
                        <input type="text" value="{{ old('total_bayar') }}" id="total_bayar" name="total_bayar" class="form-control" readonly>
                      </div>
                    </div>
                  </div>
                </div>

              <div class="text-end">
                <button type="submit" class="text-uppercase btn btn-primary">Buy</button>
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
      $(function() {

      })

      var i = 0;

      function addMenu() {
        ++i
        $('#list-menu').append(`
                  <div class="row justify-content-center menu" id="list-trans-${i}">
                    <div class="col-md-5">
                      <div class="my-3">
                        <label class="form-label">Menu</label>
                        <div class="form-group input-group input-group-outline @error('pesan[${i}][menu]') has-danger @enderror">
                          <select class="form-control select2bs4 select-count" name="pesan[${i}][menu]" id="pesan-${i}-menu" required>
                            <option value="" selected></option>
                            @foreach ($menus as $menu)
                              <option value="{{ $menu->id }}" {{ (old('pesan[${i}][menu]') == $menu->nama_menu) ? 'selected="selected"' : '' }}data-id="${i}" data-menu-id="{{ $menu->id }}" data-harga="{{ $menu->harga }}">{{ $menu->nama_menu }}</option>
                            @endforeach
                          </select>
                        </div>
                        @error('pesan.${i}.menu')
                          <div id="menu-error" class="error text-danger pl-3" for="menu" style="display: block;">
                            <small>{{ $errors->first('pesan.${i}.menu') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Jumlah</label>
                        <div class="input-group input-group-outline @error('pesan[${i}][jumlah]') has-danger @enderror">
                          <input type="number" value="{{ (old('pesan[${i}][jumlah]')) ? old('pesan[${i}][jumlah]') : '1' }}" min="1" name="pesan[${i}][jumlah]" id="pesan-${i}-jumlah" placeholder="1" class="form-control jumlah-count" required>
                        </div>
                        @error('pesan.${i}.jumlah')
                          <div id="jumlah-error" class="error text-danger pl-3" for="jumlah" style="display: block;">
                            <small>{{ $errors->first('pesan.${i}.jumlah') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-4">
                      <div class="my-3">
                        <label class="form-label">Total Harga</label>
                        <div class="input-group input-group-outline">
                          <input type="text" value="{{ old('pesan[${i}][total_harga]') }}" id="pesan-${i}-total" name="pesan[${i}][total_harga]" class="form-control total" required readonly>
                        </div>
                        @error('pesan.${i}.total_harga')
                          <div id="total_harga-error" class="error text-danger pl-3" for="total_harga" style="display: block;">
                            <small>{{ $errors->first('pesan.${i}.total_harga') }}</small>
                          </div>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-1">
                      <div class="my-3">
                        <label class="form-label">Remove</label>
                        <div class="input-group input-group-outline">
                          <button class="btn btn-primary text-md remove-trans" type="button" data-id="${i}" style="border-radius: 100%">-</button>
                        </div>
                      </div>
                    </div>
                  </div>`)
        $('.select2bs4').select2({
          theme: 'bootstrap4'
        })
      }

      function totalBayar() {
        var sum = 0;
        $('.total').each(function(){
            sum += parseFloat(this.value);
        });
        $('#total_bayar').val(sum)
      }
        
      $(document).on('click', '.remove-trans', function () {
        var id = $(this).attr('data-id')
        $(`#list-trans-${id}`).remove()
        totalBayar()
      });

      $(document).on('change', '.select-count', function () {
        var element = $(this).find('option:selected'); 
        var harga = element.attr("data-harga"); 
        var menu_id = element.attr("data-menu-id"); 
        var id = element.attr("data-id"); 
        var id_jumlah = `#pesan-${id}-jumlah`;
        $(id_jumlah).attr('data-harga', harga)
        $(id_jumlah).attr('data-menu-id', menu_id)
        $(id_jumlah).attr('data-id', id)
        var jumlah = $(id_jumlah).val();
        var total = harga * jumlah
        var total_harga = (total/1000).toFixed(3)
        $(`#pesan-${id}-total`).val(total)
        totalBayar()
      });

      $(document).on('change', '.jumlah-count', function() {
        var harga = $(this).attr('data-harga');
        var menu_id = $(this).attr('data-menu-id');
        var id = $(this).attr('data-id');
        var jumlah = $(this).val()
        var total = harga * jumlah
        var total_harga = (total/1000).toFixed(3)
        $(`#pesan-${id}-total`).val(total)
        totalBayar()
      });
  </script>
@endpush