<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Log;


class AuthCustomMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
  public function handle(Request $request, Closure $next)
{
    // Essaie d’accéder à la session brute via la façade
    Log::info('Session id: ' . session()->getId());

    if (!$request->session()->has('user_id')) {
        return redirect()->route('login');
    }

    return $next($request);
}

}
