<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    public function handle(Request $request, Closure $next)
    {
        // Vérifie si l'utilisateur est bien "admin@pharma.com"
        if (Auth::check() && Auth::user()->email === 'admin@pharma.com') {
            return $next($request);
        }

        // Redirige si ce n'est pas l'admin
        return redirect('/')->with('error', 'Accès non autorisé.');
    }
}
