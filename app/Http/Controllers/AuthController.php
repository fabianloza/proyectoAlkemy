<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
        public function login(Request $request)
        {
            $credenciales = $request->validate([
                'email' => 'required|exists:usuarios,email',
                'contrasena' => 'required'
            ]);

            $credenciales['password'] = $credenciales['contrasena'];
            unset($credenciales['contrasena']);

    
            if (Auth::attempt($credenciales)) {
                $usuario = Usuario::find(Auth::user()->id);
                $token = $usuario->createToken('token')->accessToken;
    
                return response()->ok(['token' => $token, 'usuario' => $usuario]);
            }
            return response()->unauthorized();
        }
    
        public function register(Request $request) {
            $request->validate([
                'nombre' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:usuarios',
                'contrasena' => 'required|string|min:8|max:30',
                'telefono' => 'nullable|string|max:30',
                'domicilio' => 'nullable|string|max:255',
            ]);
    
            $request['contrasena'] = Hash::make($request['contrasena']);
    
            $usuario = Usuario::create($request->toArray());
            $token = $usuario->createToken('token')->accessToken;
    
            return response()->created(['token' => $token, 'usuario' => $usuario]);
        }
    
        public function logout(Request $request) {
            $token = $request->user()->token();
            $token->revoke();
    
            return response()->ok();
        }
}
