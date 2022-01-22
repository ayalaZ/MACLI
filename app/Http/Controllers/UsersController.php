<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
USE Illuminate\Validation\Rules\Password;
use App\Models\User;

class UsersController extends Controller
{
    function add(Request $request){
        $request->validate([
            'nombre' => ['required', 'string'],
            'email' => ['required', 'string'],
            'usuario' => ['required', 'string'],
            'clave' => ['required', 'confirmed',
                     Password::min(8)
                     ->letters()
                     ->mixedCase()
                     ->numbers()
                     ->symbols()
                     ->uncompromised()                
        ],
        ]);
       $usuarios =  User::where('name',$request->nombre)->where('email',$request->email)->first();
        if ($usuarios == null) {
            $usuario = new User();
            $usuario->name = $request->nombre;
            $usuario->email = $request->email;
            $usuario->user = $request->usuario;
            $usuario->password = HASH::make($request->clave);
            $usuario->password_verified_at = HASH::make($request->clave_confirmation);
            $usuario->save();
            return redirect()->route('login')->with('success','Usuario creado con exito');
        }else{
            return back()->with('error','Datos duplicados');
        }

    }
}
