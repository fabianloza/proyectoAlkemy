<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //Metodo para crear un usuario
    public function store(Request $request){
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->contrasena = $request->contrasena;
        $usuario->telefono = $request->telefono;
        $usuario->domicilio = $request->domicilio;
        $usuario->save();

        return response()->json(['respuesta' => 'Agregado correctamente']);
    }

    //Metodo para actualizar un usuario
    public function update(Request $request, $id){
        $usuario = Usuario::find($id);
        $usuario->update($request->all());
        $usuario->save();
        return response()->json(['respuesta' => $usuario]);
    }
}
