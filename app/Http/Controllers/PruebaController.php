<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function saludar(Request $request) {
        //return response()->json(['respuesta' => $request->mensaje]);
        echo "Hola mundo";
    }

    public function despedir(Request $request) {
        echo $request->mensaje;
    }

    public function conversar(Request $request) {
        //return response()->json(['respuesta' => $request->mensaje]);
        //echo $request->mensaje;
        echo "Estoy en una ruta parametrizada";
    }
}

