<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        return response()->ok($usuarios);
    }

    public function show(){
        $usuario = Usuario::find(Auth::user()->id);
        return response()->ok($usuario);
    }

    public function update(Request $request){
        $request->validate([
            'nombre' => 'string|max:100',
            'email' => 'string|email|max:100',
            'contrasena' => 'omitir',
            'telefono' => 'string|max:30',
            'domicilio' => 'string|max:255'
        ]);
        $usuario = Usuario::find(Auth::user()->id);
        $usuario->update($request->all());
        $usuario->save();
        return response()->ok($usuario);
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:100',
            'email' => 'required|string|email|max:100|unique:usuarios',
            'contrasena' => 'required|string|max:30|min:8|alpha_num',
            'telefono' => 'string|max:30',
            'domicilio' => 'string|max:255'
        ]);
        //Crear usuario
        $usuario = new Usuario();
        $usuario->nombre = $request->nombre;
        $usuario->email = $request->email;
        $usuario->telefono = $request->telefono;
        $usuario->domicilio = $request->domicilio;
        //Encriptar contraseña
        $usuario->contrasena = Hash::make($request->contrasena);
        $usuario->save();
        return response()->created($usuario);
    }

}
