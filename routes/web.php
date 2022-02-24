<?php

use App\Http\Controllers\FilterDateController;
use App\Http\Controllers\LaporanController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\Route\RouteController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [RouteController::class, 'welcome'])->name('welcome');

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->group(function() {
    Route::name('admin.')->prefix('admin')->middleware('admin')->group(function() {
        Route::resource('registration', UserController::class);
    });
    
    Route::name('kasir.')->prefix('kasir')->middleware('kasir')->group(function() {
        Route::resource('transaction', TransaksiController::class);
    });
    
    Route::name('manajer.')->prefix('manajer')->middleware('manajer')->group(function() {
        Route::get('/dashboard', [RouteController::class, 'manajerDashboard'])->name('dashboard');
        Route::resource('menu', MenuController::class);
        Route::post('/filter/laporan', FilterDateController::class)->name('filter-laporan');
        Route::get('/laporan', [LaporanController::class, 'index'])->name('laporan');
        Route::get('/laporan/cetak', [LaporanController::class, 'cetak'])->name('cetak-laporan');
        Route::post('/laporan/cetak', [LaporanController::class, 'filterCetak'])->name('cetak-laporan-filtering');
    });
});