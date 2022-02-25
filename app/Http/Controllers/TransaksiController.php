<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransaksiRequest;
use App\Models\Menu;
use App\Models\Transaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransaksiController extends Controller
{
    public function __construct()
    {
        $this->middleware('kasir');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = Transaksi::latest('created_at')->paginate(12);
        return view('kasir.index', compact('datas'))
        ->with('i', (request()->input('page', 1) -1) * 12);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menus = Menu::where('ketersediaan', '>', 0)->get();
        $harga = Menu::get('harga');
        
        return view('kasir.create', compact('menus', 'harga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TransaksiRequest $request)
    {
        $nama_pelanggan = $request->nama_pelanggan;
        $menu = $request->nama_menu;
        $menus = Menu::where('nama_menu', $menu)->get();
        $menu_id = $menus[0]->id;
        $jumlah = $request->jumlah;
        $total_harga = $request->total_harga;
        $peg_id = Auth::user()->id;

        Transaksi::create([
            'nama_pelanggan' => $nama_pelanggan,
            'menu_id' => $menu_id,
            'jumlah' => $jumlah,
            'total_harga' => $total_harga,
            'pegawai_id' => $peg_id,
        ]);

        $menu_change = Menu::find($menu_id);

        $ket_ada = $menu_change->ketersediaan;

        $ket_ada_new = $ket_ada - $jumlah;

        $menu_change->update([
            'ketersediaan' => $ket_ada_new
        ]);

        return redirect()->route('kasir.transaction.index')->with('success', 'Transaksi Baru Telah Berhasil Ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function show(Transaksi $transaksi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaksi $transaksi, $id)
    {
        $menus = Menu::all();
        $harga = Menu::get('harga');

        $data = Transaksi::find($id);
        
        return view('kasir.edit', compact('menus', 'harga', 'data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaksi $transaksi, $id)
    {
        $nama_pelanggan = $request->nama_pelanggan;
        $menu = $request->nama_menu;
        $menus = Menu::where('nama_menu', $menu)->get();
        $menu_id = $menus[0]->id;
        $jumlah_baru = $request->jumlah;
        $total_harga = $request->total_harga;

        $trans = Transaksi::find($id);

        $jumlah_lama = $trans->jumlah;
        $old_menu_id = $trans->menu_id;

        $trans->update([
            'nama_pelanggan' => $nama_pelanggan,
            'menu_id' => $menu_id,
            'jumlah' => $jumlah_baru,
            'total_harga' => $total_harga,
        ]);

        if ($menu_id !== $old_menu_id) {
            $menu_change = Menu::find($old_menu_id);
            $ket_ada = $menu_change->ketersediaan;
            $ket_ada_new = $ket_ada + $jumlah_lama;
            $menu_change->update([
                'ketersediaan' => $ket_ada_new
            ]);
            
            $menu_change_2 = Menu::find($menu_id);
            $ket_ada = $menu_change_2->ketersediaan;
            $ket_ada_new = $ket_ada - $jumlah_baru;
            $menu_change_2->update([
                'ketersediaan' => $ket_ada_new
            ]);
        } else {
            $menu_change = Menu::find($menu_id);
            
            $ket_ada = $menu_change->ketersediaan;

            $selisih = $jumlah_lama - $jumlah_baru;
            $ket_ada_new = $ket_ada + $selisih;

            $menu_change->update([
                'ketersediaan' => $ket_ada_new
            ]);
        }

        return redirect()->route('kasir.transaction.index')->with('success', 'Transaksi Telah Berhasil Diperbaharui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaksi  $transaksi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaksi $transaksi, $id)
    {
        $trans = Transaksi::find($id);
        $jumlah = $trans->jumlah;
        $menu_id = $trans->menu_id;
        $menu_change = Menu::find($menu_id);
        $ket_ada = $menu_change->ketersediaan;
        $ket_ada_new = $ket_ada + $jumlah;
        $menu_change->update([
            'ketersediaan' => $ket_ada_new
        ]);

        $trans->delete();

        return redirect()->route('kasir.transaction.index')->with('success', 'Transaksi Telah Berhasil Dihapus!');
    }
}
