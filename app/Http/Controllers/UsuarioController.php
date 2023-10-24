<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function store(Request $request){
        return "Usuario creado";
    }

    public function update(Request $request){
        return "Usuario actualizado con id: $request->id";
    }
}
