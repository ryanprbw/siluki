<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah pengguna bukan admin
        if (!auth()->user()->isAdmin()) {
            // Pengguna bukan admin, lanjutkan permintaan
            return $next($request);
        }

        // Pengguna adalah admin, alihkan ke halaman lain (misalnya dashboard admin)
        return redirect('/dashboard/admin');
    }
}
