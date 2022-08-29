<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        config(['app.locale' => 'id']);

        \Carbon\Carbon::setLocale('id');

        Blade::if('customer', function () {
            return Auth::guest() || Auth::user()->role == 'pelanggan';
        });

        Blade::if('admin', function () {
            return Auth::user()->role == 'admin';
        });

        Blade::if('kasir', function () {
            return Auth::user()->role == 'kasir';
        });

        Blade::if('manajer', function () {
            return Auth::user()->role == 'manajer';
        });
    }
}
