<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class FilterDateController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $from = $request->from;
        $to = $request->to;

        $fDatas = Transaksi::join('menus', 'menus.id', '=', 'transaksis.menu_id')
                ->join('users', 'users.id', '=', 'transaksis.pegawai_id')
                ->select('transaksis.*', 'menus.nama_menu', 'users.name')
                ->where('transaksis.created_at', '>=', $from)
                ->where('transaksis.created_at', '<=', $to)
                ->get();

        // $fDatas->created_at->date_format('D, d M Y');

        if ($request->ajax()) {
            return response()->json([
                'data' => $fDatas
            ]);
        }

        // return view('manajer.laporan.index', compact('fDatas'));
    }
}
