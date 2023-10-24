<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetodoPagoController extends Controller
{
    public function index(){
        return "Listado de metodos de pago";
    }

    public function store(Request $request){
        return "Metodo de pago creado";
    }

    public function update(Request $request){
        return "Metodo de pago actualizado con id: $request->id";
    }
}
