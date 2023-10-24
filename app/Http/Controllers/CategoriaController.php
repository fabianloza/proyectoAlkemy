<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
        return "Listado de categorias";
    }

    public function show(Request $request){
        return "Categoria con id: $request->id";
    }

    public function store(Request $request){
        return "Categoria creada";
    }

    public function update(Request $request){
        return "Categoria actualizada con id: $request->id";
    }
}
