<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Usuario;
use Illuminate\Http\Request;

class CarritoController extends Controller
{
    public function index(){
        $carritos = Carrito::all();
        return response()->json(['Carritos' => $carritos]);

        //return "Listado de carritos";
    }

    public function show(Request $request){
        return "Carrito con id: $request->id";
    }

    //Metodo para crear un Carrito
    public function store(Request $request){
        $user = Usuario::find($request->usuario_id);
        $carrito = new Carrito();
        $user->carritos()->save($carrito);
        $carrito->save();

        return response()->json(['respuesta' => 'Carrito creado correctamente']);
        return "Carrito creado";
    }

    //Metodo para actualizar un carrito
    public function update(Request $request, $id){
        $carrito = Carrito::find($id);
        $carrito->update($request->all());
        $carrito->save();
        return response()->json(['respuesta' => $carrito]);
    }

    public function destroy(Request $request){
        return "Carrito eliminado con id: $request->id";
    }
}
