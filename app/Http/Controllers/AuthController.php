<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApiResource;
use App\Models\Usuario;
use Exception;
use Illuminate\Http\Request;
use Firebase\JWT\JWT;
use Laravel\Prompts\Key;

class AuthController extends Controller
{
    public function login(Request $request){
        $credenciales = $request->validate([
            'email' => 'required|email|exists:usuarios,email',
            'password' => 'required'
        ]);

        $clave = "38QnJ0wWudyLpLQGkTaY/9F7ZHpmlx6st/DGEoDyZ4g=";
        $user = Usuario::where('email', $request->email)->first();

        if(!$user || $request->password != $user->password){
            return response()->json([
                'message' => 'Credenciales incorrectas'
            ], 401);
        }
        
        $datos = [
            'user_id' => $user->id,
            'email' => $request->email,
            'rol' => 'usuario'
        ];
        $token = JWT::encode($datos, $clave, 'HS256');

        return new ApiResource($token);
    }

    public function validateToken($jwt){
        $clave = "38QnJ0wWudyLpLQGkTaY/9F7ZHpmlx6st/DGEoDyZ4g=";
        try{
            $datos = JWT::decode($jwt, new Key($clave, 'HS256'));
            return new ApiResource($datos);
        } catch (Exception $e){
            return new ApiResource($e);
        }

    }
}
