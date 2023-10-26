<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\metodoPago;

class MetodoPagoController extends Controller
{
    public function index(){
        $metodosPago = MetodoPago::all();
        return response()->json($metodosPago, 200);
    }

    public function store(Request $request){
    
        $metodoPago = new MetodoPago();
        $metodoPago->nombre = $request->input('nombre');
        $metodoPago->save();
    
        return response()->json(['message' => 'Método de pago creado con éxito'], 201);
    }

    public function update(Request $request){
        $id= $request->input('id');
       $nuevo_nombre= $request->input('nuevo_nombre');
    
       $metodoPago = MetodoPago::find($id);

       $metodoPago->nombre = $nuevo_nombre;
      $metodoPago->save();


        return response()->json(['message' => 'Metodo cambiado con exito'], 200);
    


    }
}
