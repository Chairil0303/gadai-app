<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class BranchMiddleware
{
        public function handle(Request $request, Closure $next)
    {
        // Jika user belum login, biarkan dia ke halaman login dulu
        if (!auth()->check()) {
            return $next($request);
        }

        // Jika user sudah login, tapi belum pilih cabang, arahkan ke select-branch
        if (!session()->has('branch') && $request->path() !== 'select-branch') {
            return redirect()->route('branch.select');
        }

        return $next($request);
    }
}
