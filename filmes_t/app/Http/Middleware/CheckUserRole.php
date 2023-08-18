<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckUserRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, ...$roles)
    {
        if (in_array(auth()->user()->cargo, $roles)) {
            return $next($request);
        }
    
        return redirect('/'); // Redirecionar para a página inicial se o usuário não tiver a permissão
    }
    
}
