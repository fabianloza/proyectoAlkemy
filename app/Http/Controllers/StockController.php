<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function show(Request $request){
        $stock = Stock::find($request->id);
        return response()->json(['stock' => $stock]);
    }

    public function update(Request $request){
        $stock = Stock::find($request->id);
        $stock->cantidad = $request->cantidad;
        $stock->save();
        return response()->json(['stock' => $stock]);
    }

    public function store(Request $request){
        $stock = new Stock();
        $stock->producto_id = $request->producto_id;
        $stock->cantidad = $request->cantidad;
        $stock->save();
        return response()->json(['stock' => $stock]);
    }
}
