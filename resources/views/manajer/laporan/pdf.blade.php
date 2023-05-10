<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link id="pagestyle" href="{{ public_path('assets') }}/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />
  {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> --}}
  <title>Laporan PDF Our Café</title>
</head>
<body>
  <div class="container-fluid py-4">
    <header>
      <h2 class="text-center"><img src="{{ public_path('assets/img/icon1.png') }}" alt="logo" width="40" height="40"> Transaksi <i class="text-sm">(all)</i></h2>
    </header>
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-black text-capitalize ps-3">Transactions table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>
                    <th class="text-secondary text-xs font-weight-bolder opacity-7">No</th>
                    <th class="text-secondary text-xs font-weight-bolder opacity-7">Nama Pelanggan</th>
                    <th class="text-secondary text-xs font-weight-bolder opacity-7">User</th>
                    <th class="text-secondary text-center text-xs font-weight-bolder opacity-7 ps-2">Menu</th>
                    <th class="text-center text-secondary text-xs font-weight-bolder opacity-7">Jumlah</th>
                    <th class="text-center text-secondary text-xs font-weight-bolder opacity-7">Total</th>
                    <th class="text-center text-secondary text-xs font-weight-bolder opacity-7">Nama Pegawai</th>
                    <th class="text-center text-secondary text-xs font-weight-bolder opacity-7" colspan="2">Waktu</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($datas as $data)
                    <tr>
                      <td class="text-secondary text-center" style="width: 2px">{{ $loop->iteration }}</td>
                      <td>
                        <p class="text-xl text-capitalize text-secondary mb-0">{{ $data->nama_pelanggan }}</p>
                      </td>
                      <td class="text-center">
                        <p class="text-xl text-secondary mb-0">@isset($data->user_id) {{ $data->pelanggan->username }} @else - @endisset</p>
                      </td>
                      <td>
                        <p class="text-xs font-weight-bold mb-0">{{ $data->menu->nama_menu }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xl text-secondary mb-0">{{ $data->jumlah }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xl text-secondary mb-0">Rp. {{ number_format($data->total_harga, 2, ',', '.') }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xl text-secondary mb-0">@isset($data->pegawai->name) {{ $data->pegawai->name }} @else - @endisset</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xl text-secondary mb-0">{{ $data->created_at->format('D, d M Y') }}</p>
                      </td>
                      <td class="align-middle text-center text-sm">
                        <p class="text-xl text-secondary mb-0">{{ $data->created_at->format('H:i') }}</p>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer small text-end text-black-50"><div class="container-fluid px-4 px-lg-5">Copyright &copy; Macca - Our Café 2022</div></footer>
  </div>
</body>
</html>