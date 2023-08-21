<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\login;



class authController extends Controller
{


    public function login()
    {
        return view('login.login');
    }

    public function userlogin(Request $r)
    {
        $usario = new login();
        $usario->usuario = $r->input('usuario');
        $usario->password = $r->input('password');

        $respuesta = login::where('usuario', 'LIKE', '%' .  $usario->usuario . '%')
                            ->Where('password', 'LIKE','%' .  $usario->password . '%')
                            ->get();
 
        if ($respuesta->isEmpty()) {
            return view('login.login'); 
        } else {
            return view('semilleros.home', ['respuesta' => $respuesta]);
        }
    }

   
}
