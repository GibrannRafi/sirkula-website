<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next)
    {
        // Jika belum login, redirect ke halaman login
        if (!Auth::check()) {
            return redirect()->route('login.tampil');
        }

        // Periksa role user, redirect ke halaman sesuai role
        $user = Auth::user();
        if ($user->role === 'admin') {
            return redirect()->route('admin.tampil');
        } elseif ($user->role === 'user') {
            return redirect()->route('rs.tampil');
        }

        return $next($request);
    }
}
