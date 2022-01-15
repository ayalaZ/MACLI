<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutasController extends Controller
{
    function login(){
        return view('login');
    }
    function registrarse(){
        return view('registrarse');
    }
}
