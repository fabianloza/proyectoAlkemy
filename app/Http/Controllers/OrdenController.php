<?php

namespace App\Http\Controllers;

use App\Models\Orden;
use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function show(Request $request){
        $orden = Orden::find($request->id);
        return response()->json(array('data' => $orden));
    }

    public function store(Request $request){
        $nuevaOrden = new Orden();
        $nuevaOrden->carrito_id = $request->carrito_id;
        $nuevaOrden->metodo_pago_id = $request->metodo_pago_id;
        $nuevaOrden->fecha_creacion = now();
        $nuevaOrden->save();
    }

    public function update(Request $request){
        $orden = Orden::find($request->id);
        $orden->metodo_pago_id = $request->metodo_pago_id;
        $orden->save();
    }
}
