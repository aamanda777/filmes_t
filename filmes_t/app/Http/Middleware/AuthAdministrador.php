<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AuthAdministrador
{
    public function handle($request, Closure $next)
    {
        if (Auth::user() && Auth::user()->cargo === 'administrador') {
            return $next($request);
        }

        return redirect('/')->with('error', 'Acesso não autorizado.');
    }
}
