<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return response()->ok($categorias);
    }

    public function show(Request $request){
        $categoria = Categoria::find($request->id);
        return response()->ok($categoria);
    }

    public function store(Request $request){
        $request->validate(['nombre' => 'required|string|max:255']);

        $nuevaCategoria = new Categoria();
        $nuevaCategoria->nombre = $request->nombre;
        $nuevaCategoria->save();
        return response()->created($nuevaCategoria);
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:categorias,id',
            'nombre' => 'required|string|max:255'
        ]);
        
        $categoria = Categoria::find($request->id);
        $categoria->nombre = $request->nombre;
        $categoria->save();
        return response()->ok($categoria);
    }
}
