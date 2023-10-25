<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function index(){
        $productos = productos::all();
        return response()->json($productos, 200);
    }

    public function show(Request $request){
        return "Detalle del producto con id: $request->id";
    }

    public function store(Request $request){
        return "Producto creado";
    }

    public function update(Request $request){
        return "Producto actualizado con id: $request->id";
    }

    public function destroy(Request $request){
        return "Producto eliminado con id: $request->id";
    }
}
