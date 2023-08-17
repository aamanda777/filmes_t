<?php

namespace App\Http\Middleware;

use Closure;

class AuthAdministrador
{
    public function handle($request, Closure $next)
    {
        if (auth()->check() && auth()->user()->cargo === 'administrador') {
            return $next($request);
        }

        return redirect()->route('dashboard')->with('error', 'Acesso não autorizado.');
    }
}
