<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Stock;
use Illuminate\Http\Request;


class ProductoController extends Controller
{
    public function index(){
        $productos = Producto::all()->where('habilitado', true);
        return response()->ok($productos);
    }

    public function show(Request $request){
        $producto = Producto::find($request->id);
        return response()->ok($producto);
    }

    public function store(Request $request){
        $request->validate([
            'nombre' => 'required|string|max:100',
            'precio' => 'required|numeric|min:0',
            'imagen' => 'string|max:255',
            'descripcion' => 'string|max:255',
            'categoria_id' => 'required|integer|exists:categorias,id',
            'cantidad' => 'integer|min:0'
        ]);

        //Crear producto
        $categoria = Categoria::find($request->categoria_id);
        $nuevoProducto = new Producto();
        $nuevoProducto->nombre = $request->nombre;
        $nuevoProducto->precio = $request->precio;
        $nuevoProducto->imagen = $request->imagen;
        $nuevoProducto->descripcion = $request->descripcion;
        $nuevoProducto->categoria()->associate($categoria);
        $nuevoProducto->save();
        //Crear stock asociado al producto
        $nuevoStock = new Stock();
        if(isset($request->cantidad)){$nuevoStock->cantidad = $request->cantidad;}
        $nuevoStock->producto()->associate($nuevoProducto);
        $nuevoStock->save();
        return response()->created($nuevoProducto);
    }

    public function update(Request $request){
        $credentials = $request->validate([
            'id' => 'integer|exists:productos,id',
            'nombre' => 'string|max:100',
            'precio' => 'numeric|min:0',
            'imagen' => 'string|max:255',
            'descripcion' => 'string|max:255',
            'categoria_id' => 'integer|exists:categorias,id',
            'cantidad' => 'exclude|integer|min:0'
        ]);

        $producto = Producto::find($request->id);
        $producto->update($credentials);
        $producto->save();
        if(isset($request->cantidad)){
            $producto->stock->cantidad = $request->cantidad;
            $producto->stock->save();}
            
        return response()->ok($producto);
    }

    public function destroy(Request $request){

        $producto = Producto::find($request->id);
        $producto->habilitado = false;
        $producto->save();
        return response()->ok($producto);
    }
}
