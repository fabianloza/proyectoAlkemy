<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\metodoPago;

class MetodoPagoController extends Controller
{
    public function index(){
        $metodosPago = MetodoPago::all();
        return response()->ok($metodosPago);
    }

    public function show(Request $request){
        $metodoPago = MetodoPago::find($request->id);
        return response()->ok($metodoPago);
    }

    public function store(Request $request){
        $request->validate(['nombre' => 'required|string|max:255']);

        $metodoPago = new MetodoPago();
        $metodoPago->nombre = $request->nombre;
        $metodoPago->save();
        return response()->created($metodoPago);
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:metodo_pagos,id',
            'nombre' => 'required|string|max:255'
        ]);
        
        $metodoPago = MetodoPago::find($request->id);
        $metodoPago->nombre = $request->nombre;
        $metodoPago->save();
        return response()->ok($metodoPago);
    }
}
