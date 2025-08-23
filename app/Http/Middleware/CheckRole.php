<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\HttpException;

class CheckRole
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next, ...$roles): Response
    {
        $user = session('user');
        if (!$user || !in_array($user['role'], $roles)) {
            throw new HttpException(
                Response::HTTP_FORBIDDEN,
                'Forbidden.'
            );
        }

        return $next($request);
    }
}
