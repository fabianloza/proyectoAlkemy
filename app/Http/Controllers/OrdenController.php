<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\metodoPago;
use App\Models\Orden;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrdenController extends Controller
{
    public function index(){
        $ordenes = Orden::all();
        return response()->ok($ordenes);
    }

    public function show(){
        $carrito = Usuario::find(Auth::user()->id)->carritos()->where('finalizado', true)->first();
        $orden = Orden::where('carrito_id', $carrito->id)->first();
        return response()->ok($orden);
    }

    public function store(Request $request){
        $request->validate(['metodo_pago_id' => 'required|integer|exists:metodo_pagos,id']);
        
        //crear orden
        $carrito = Carrito::carritoUsuarioActual();
        $metodoPago = metodoPago::find($request->metodo_pago_id);
        $nuevaOrden = new Orden();
        $nuevaOrden->carrito()->associate($carrito);
        $nuevaOrden->metodo_pago()->associate($metodoPago);
        $nuevaOrden->save();
        //finalizar carrito
        $carrito->finalizado = true;
        $carrito->save();
        //actualizar el stock de los productos
        foreach ($carrito->pedidos as $pedido) {
            $pedido->producto->stock->cantidad -= $pedido->cantidad;
            $pedido->producto->stock->save();
        }
        return response()->created($nuevaOrden);
    }

    public function update(Request $request){
        $request->validate(['metodo_pago_id' => 'required|integer|exists:metodo_pagos,id']);

        $carrito = Carrito::carritoUsuarioActual();
        $orden = Orden::where('carrito_id', $carrito->id)->first();
        $orden->metodo_pago_id = $request->metodo_pago_id;
        $orden->save();
        return response()->ok($orden);
    }
}
