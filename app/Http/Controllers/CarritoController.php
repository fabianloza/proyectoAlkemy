<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index(){
        return "Listado de carritos";
    }

    public function show(Request $request){
        return "Carrito con id: $request->id";
    }

    public function store(Request $request){
        return "Carrito creado";
    }

    public function update(Request $request){
        return "Carrito actualizado con id: $request->id";
    }

    public function destroy(Request $request){
        return "Carrito eliminado con id: $request->id";
    }
}
