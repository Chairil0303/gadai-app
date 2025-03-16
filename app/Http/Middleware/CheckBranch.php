<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckBranch
{
    public function handle(Request $request, Closure $next)
    {
        // Jika user belum login, lanjutkan tanpa cek cabang
        if (!auth()->check()) {
            return $next($request);
        }

        // Jika user sudah login, tapi belum pilih cabang, arahkan ke select-branch
        if (!$request->session()->has('branch') && !$request->is('select-branch')) {
            return redirect()->route('branch.select');
        }

        return $next($request);
    }
}
    