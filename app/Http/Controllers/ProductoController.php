<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all();
        return response()->json($productos, 200);
    }

    public function show(Request $request){
        return "Detalle del producto con id: $request->id";
    }

    public function store(Request $request){
        $categoria = Categoria::find($request->categoria_id);
        $nuevoProducto = new Producto();
        $nuevoProducto->nombre = $request->nombre;
        $nuevoProducto->precio = $request->precio;
        $nuevoProducto->imagen = $request->imagen;
        $nuevoProducto->descripcion = $request->descripcion;
        $nuevoProducto->categoria()->associate($categoria);
        $nuevoProducto->save();
    }

    public function update(Request $request){
        return "Producto actualizado con id: $request->id";
    }

    public function destroy(Request $request){
        return "Producto eliminado con id: $request->id";
    }
}
