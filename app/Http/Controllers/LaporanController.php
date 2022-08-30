<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function __construct()
    {
        $this->middleware('manajer');
    }

    public function index()
    {
        $datas = Transaksi::latest('created_at')->paginate(10);
        $filter = null;
        return view('manajer.laporan.index', compact('datas', 'filter'))
            ->with('i', (request()->input('page', 1) -1) * 10);
    }

    // public function filter()
    // {
    //     $datas = Transaksi::all();
    //     $
    //     return view('manajer.laporan.index', compact('datas'));
    // }

    public function cetak()
    {
        $datas = Transaksi::all();

        $pdf = PDF::loadview('manajer/laporan/pdf', compact('datas'))->setPaper('a4', 'landscape');
    	return $pdf->stream();
    }

    public function filterCetak(Request $request)
    {
        $from = $request->from;
        $to = $request->to;

        if ($from == $to) {
            $datas = Transaksi::whereDate('created_at', $from)->get();
        } else {
            $datas = Transaksi::whereDate('created_at', '>=', $from)->whereDate('created_at', '<=', $to)->get();
        }

        $pdf = PDF::loadview('manajer/laporan/pdf-filter', compact('datas', 'from', 'to'))->setPaper('a4', 'landscape');
    	return $pdf->stream();
    }
}
