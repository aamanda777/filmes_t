<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckRole
{
    public function handle(Request $request, Closure $next, $role)
    {
        if (!Auth::guard($role)->check()) {
            return redirect()->route('dashboard'); // Redirecionar para a página de dashboard ou onde preferir
        }

        return $next($request);
    }
}
