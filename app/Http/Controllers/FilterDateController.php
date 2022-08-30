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

        if ($from == $to) {
            $fDatas = Transaksi::whereDate('transaksis.created_at', $from)->join('menus', 'menus.id', '=', 'transaksis.menu_id')
                ->select('transaksis.*', 'menus.nama_menu')
                ->get();
        } else {
            $fDatas = Transaksi::join('menus', 'menus.id', '=', 'transaksis.menu_id')
                ->select('transaksis.*', 'menus.nama_menu')
                ->whereDate('transaksis.created_at', '>=', $from)
                ->whereDate('transaksis.created_at', '<=', $to)
                ->get();
        }

        if ($request->ajax()) {
            return response()->json([
                'data' => $fDatas
            ]);
        }

        // return view('manajer.laporan.index', compact('fDatas'));
    }
}
