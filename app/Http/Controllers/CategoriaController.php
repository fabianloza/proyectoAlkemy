<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        $categorias = Categoria::all();
        return response()->json(array('data' => $categorias));
    }

    public function show(Request $request){
        $categoria = Categoria::find($request->id);
        return response()->json(array('data' => $categoria));
    }

    public function store(Request $request){
        $nuevaCategoria = new Categoria();
        $nuevaCategoria->nombre = $request->nombre;
        $nuevaCategoria->save();
    }

    public function update(Request $request){
        $categoria = Categoria::find($request->id);
        $categoria->nombre = $request->nombre;
        $categoria->save();
    }
}
