<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;



class authController extends Controller
{
    use AuthenticatesUsers;

    protected $redirectTo = '/semillero';

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    public function login()
    {
        return view('login.login');
    }

    public function userlogin()
    {

        return view('semilleros.home');
    }

   
}
