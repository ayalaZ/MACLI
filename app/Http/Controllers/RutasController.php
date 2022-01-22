<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    function login(){
        return view('auth.login');
    }
    function registrarse(){
        return view('auth.registrarse');
    }
}
