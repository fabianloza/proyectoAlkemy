<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function show(Request $request){
        $stock = Stock::find($request->id);
        return response()->json([ 'id' => $stock->id, 'stock' => $stock->cantidad, 'nombre' => $stock->producto->nombre]);
    }

    public function update(Request $request){
        $stock = Stock::find($request->id);
        $stock->cantidad = $request->cantidad;
        $stock->save();
        return response()->json(['stock' => $stock]);
    }

    public function store(Request $request){
        $producto = Producto::find($request->producto_id);
        $stock = new Stock();
        $stock->producto()->associate($producto);
        $stock->cantidad = $request->cantidad;
        $stock->save();
        return response()->json(['stock' => $stock]);
    }
}
