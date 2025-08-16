<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;

class CheckApiToken
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $token = Session::get('api_token');
        $user = Session::get('user');

        // 1) Cek token dan data user
        if (!$token || !$user) {
             // Hanya hapus credential, bukan semua data session
            $request->session()->forget(['api_token', 'user']);
            // Perbarui CSRF token agar aman
            $request->session()->regenerateToken();
            
            return redirect()->route('login')
                ->withErrors(['message' => 'Silakan login terlebih dahulu.']);
        }

        // 2) Token valid, lanjutkan request
        return $next($request);
    }
}
