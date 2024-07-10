<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle(Request $request, Closure $next, string $role)
    {
        // Pastikan pengguna sudah diotentikasi
        if (auth()->check()) {
            // Periksa apakah pengguna memiliki peran yang sesuai
            if (auth()->user()->role === 'admin' || auth()->user()->role === 'member') {
                return $next($request);
            } else {
                // Jika tidak memiliki peran yang sesuai, kembalikan ke halaman login dengan pesan alert
                return redirect()->route('login')->with('alert', 'Anda tidak memiliki izin untuk mengakses halaman ini.');
            }
        }

        // Jika pengguna belum diotentikasi, kembalikan ke halaman login
        return redirect()->route('login');
    }
}
