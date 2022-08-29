<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\RekapTransaksi;
use App\Models\Transaksi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BuyMenuController extends Controller
{
    public function create($selected_menu)
    {
        $menus = Menu::all();
        return view('pelanggan.menu.create', compact('menus', 'selected_menu'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'pesan.*.menu' => 'required',
            'pesan.*.jumlah' => 'required',
            'pesan.*.total_harga' => 'required',
        ]);

        $nama_pelanggan = Auth::user()->name;
        $user_id = Auth::user()->id;
        $transaksi_id = now()->format("YmdH_" . rand(9999999, 1000000));

        foreach ($request->pesan as $transaksi) {
            $menu_id = $transaksi['menu'];
            $jumlah = $transaksi['jumlah'];
            $total_harga = $transaksi['total_harga'];

            Transaksi::create([
                'transaksi_id' => $transaksi_id,
                'nama_pelanggan' => $nama_pelanggan,
                'user_id' => $user_id,
                'menu_id' => $menu_id,
                'jumlah' => $jumlah,
                'total_harga' => $total_harga,
            ]);       

            $menu_change = Menu::find($menu_id);

            $ket_ada = $menu_change->ketersediaan;

            $ket_ada_new = $ket_ada - $jumlah;

            $menu_change->update([
                'ketersediaan' => $ket_ada_new
            ]);
        }

        RekapTransaksi::create([
            'transaksi_id' => $transaksi_id,
            'user_id' => $user_id,
            'total_bayar' => $request->total_bayar,
        ]);

        return redirect()->route('pelanggan.menu.index')->with('success', "Pembelian Berhasil!");
    }
}
