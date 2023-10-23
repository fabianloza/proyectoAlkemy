<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function crear(Request $request) {
        echo $request->mensaje;
    }
    public function actualizar(Request $request) {
        echo $request->mensaje;
    }
}
