<?php

namespace App\Http\Controllers;

use App\DatoUsuario;
use Illuminate\Http\Request;

class DatoUsuarioController extends Controller
{
    function insertarDatoUsuario(Request $request){
        $request->validate([
            'username' => 'required|min:4|max:64|unique:datosUsuario|regex:/[a-zA-Z]+[a-zA-Z0-9_]*/',
            'email' => 'required|unique:datosUsuario|email|min:8',
            'passwd' => 'required|min:4'
        ],
            [
                'username.unique' => 'Username is taken',
                'email.required' => 'Email is required',
                'passwd.required' => 'Password is required'
            ]);
        DatoUsuario::create($request->all());
        return view('post');
    }
}
