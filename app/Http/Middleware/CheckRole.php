<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Models\login;
use App\Models\rol_usuarios;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $r, Closure $next): Response
    {
        
        $usario = new login();
        $usario->usuario = $r->input('usuario');
        $usario->password = $r->input('password');
        
        $respuestaUsuario = login::where('usuario', 'LIKE', '%' .  $usario->usuario . '%')
                                    ->Where('password', 'LIKE','%' .  $usario->password . '%')
                                    ->get();
        print( $respuestaUsuario);

        // $id = $respuestaUsuario->id;
        // $respuestaRol = rol_usuarios::where('id_usuario', 'LIKE', '%' . $id  . '%')->get();
        // $id_rol = $respuestaRol->id_rol;
        // if (!$respuestaUsuario->isEmpty() && $id_rol == 2) {
        //     return $next($request);
        // }

        return $next($r);
       
    }
}
