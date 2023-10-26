<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(){
        $pedidos = Pedido::all();
        return response()->json($pedidos);
    }

    public function show(Request $request){
        $pedido = Pedido::find($request->id);
        return response()->json($pedido);
    }

    public function store(Request $request){
        $carrito = Carrito::find($request->carrito_id);
        $producto = Producto::find($request->producto_id);
        $pedido = new Pedido();
        $pedido->carrito()->associate($carrito);
        $pedido->producto()->associate($producto);
        $pedido->cantidad = $request->cantidad;
        $pedido->importe = $request->importe;
        $pedido->save();
        return response()->json($pedido);
    }
}
