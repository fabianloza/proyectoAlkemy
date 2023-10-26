<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\metodoPago;
use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function show(Request $request){
        $orden = Orden::find($request->id);
        return response()->json(array('data' => $orden));
    }

    public function store(Request $request){
        $carrito = Carrito::find($request->carrito_id);
        $metodoPago = metodoPago::find($request->metodo_pago_id);
        $nuevaOrden = new Orden();
        $nuevaOrden->carrito()->associate($carrito);
        $nuevaOrden->metodo_pago()->associate($metodoPago);
        $nuevaOrden->save();
    }

    public function update(Request $request){
        $orden = Orden::find($request->id);
        $orden->metodo_pago_id = $request->metodo_pago_id;
        $orden->save();
    }
}
