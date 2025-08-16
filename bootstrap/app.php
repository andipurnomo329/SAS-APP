<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Auth\AuthenticationException;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->alias([
            'auth.session' => \App\Http\Middleware\CheckApiToken::class,
            'guest.session' => \App\Http\Middleware\RedirectIfSessionAuthenticated::class,
        ]);
        $middleware->append(\App\Http\Middleware\PreventBackHistory::class);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->render(function (AuthenticationException $e, $request) {
            // 1. Logout
            Auth::logout();

            // 2. Hapus token & data user
            $request->session()->forget(['api_token', 'user']);

            // 3. Invalidasi session & CSRF token
            $request->session()->invalidate();
            $request->session()->regenerateToken();

            // 4. Redirect ke form login
            return redirect('/login');
        });
    })->create();
