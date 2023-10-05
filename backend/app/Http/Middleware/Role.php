<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $roles)
    {
        // Divide la cadema de roles permitido en un array
        $allowedRoles = explode('|', $roles);

        // Obtiene el nombre del rol del usuario actual en minusculas 
        $roleName = strtolower($request->user()->role->name);

        // Si el rol del usuario es gerente, permite el acceso a todas las rutas
        if ($roleName == 'gerente') {
            return $next($request);
        }

        //Verifica si el nombre del rol del usuario esta en la lista de roles permitidos
        if (!in_array($roleName, $allowedRoles)) {
            return abort(403, __('No tienes autorización para acceder a esta página.'));
        }
    
        return $next($request);
    }
}
