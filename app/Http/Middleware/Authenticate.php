<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            session()->flash('warning', 'Kamu Belum Login. Ayo, Login Dulu!');
            return route('login');
        }
        // return redirect()->route('login')->with('warning', 'Kamu Belum Login. Ayo Login Dulu!');
    }
}
