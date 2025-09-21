<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // penting
use Symfony\Component\HttpFoundation\Response;

class RoleCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        // Pastikan user login
        if (Auth::check()) {
            // Jika role user ada di daftar roles yg dikirim
            if (in_array(Auth::user()->role, $roles)) {
                return $next($request);
            }
        }

        // Kalau gagal, logout + redirect ke login
        // Auth::logout();
        // return redirect()
        //     ->route('login')
        //     ->with('status', 'Akses ditolak, silakan login dengan akun yang sesuai');
    }
}
