<?php

namespace App\Http\Controllers\Route;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class RouteController extends Controller
{
    public function welcome()
    {
        $menus = Menu::get('nama_menu');
        $total_menu = Menu::all()->count();

        $today = now()->format('yy-mm-dd');
        $AgoDate= now()->subWeek()->format('Y-m-d');
        $in_a_week = Transaksi::where('created_at', '>=', $AgoDate);

        $total_transaksi = $in_a_week->count();

        $income = $in_a_week->sum('total_harga');

        return view('welcome', compact('menus', 'total_menu', 'total_transaksi', 'income'));
    }

    public function manajerDashboard()
    {
        $menus = Menu::get('nama_menu');
        $total_menu = Menu::all()->count();

        $today = now()->format('yy-mm-dd');
        $AgoDate= now()->subWeek()->format('Y-m-d');
        $in_a_week = Transaksi::where('created_at', '>=', $AgoDate);

        $total_transaksi = $in_a_week->count();

        $income = $in_a_week->sum('total_harga');

        return view('manajer.dashboard', compact('menus', 'total_menu', 'total_transaksi', 'income'));
    }
}
