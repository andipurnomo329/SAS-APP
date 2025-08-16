<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Services\MicroserviceConsumer;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class LoginController
{
    protected MicroserviceConsumer $service;

    public function __construct(MicroserviceConsumer $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'    => 'required|email',
            'password' => 'required|string',
        ]);
        
        $response = $this->service->performRequest('POST', 'login', $request->all());
        $status = $response['resCode'];

        Log::info($request->all());
        Log::info($response);

        if (!($status >= 200 && $status < 300)) {
            return back()
                ->withErrors(['message' => 'Email atau password salah'])
                ->withInput();
        }
        
        session([
            'api_token' => $response['data']['token'],
            'user' => [
                'nama' => $response['data']['user'],
                'email' => $response['data']['email'],
                'role' => $response['data']['role']
            ]
        ]);
        return redirect()->route('dashboard');
    }

    public function logout(Request $request)
    {
        $response = $this->service
            ->setToken(Session::get('api_token'))
            ->performRequest('POST', 'logout', ['email' => $request->email, 'password' => $request->password]);

        $status = $response['resCode'] ?? 0;
        if (!($status >= 200 && $status < 300)) {
            Log::error('API Logout failed', ['status' => $status, 'response' => $response]);
            if ($status != 401) {
                return back()->withErrors([
                    'message' => 'Gagal logout. Silakan coba lagi.'
                ]);
            }
        }

        Auth::logout();
        // Hapus token dari session
        $request->session()->forget(['api_token', 'user']);

        // Invalidasi session dan CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
