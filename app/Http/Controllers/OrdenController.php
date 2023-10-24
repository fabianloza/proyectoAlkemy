<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdenController extends Controller
{
    public function show(Request $request){
        return "Orden con id: $request->id";
    }

    public function store(Request $request){
        return "Orden creada";
    }

    public function update(Request $request){
        return "Orden actualizada con id: $request->id";
    }
}
