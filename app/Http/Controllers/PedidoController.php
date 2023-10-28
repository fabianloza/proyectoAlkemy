<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\Usuario;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function index(){
        $pedidos = Pedido::all();
        return response()->ok($pedidos);
    }

    public function show(Request $request){
        $pedido = Pedido::find($request->id);
        return response()->ok($pedido);
    }

    public function store(Request $request){
        $request->validate([
            'producto_id' => 'required|integer|exists:productos,id',
            'cantidad' => 'required|integer|min:1'
        ]);

        //Recupera el carrito del usuario logueado
        $carrito = Carrito::carritoUsuarioActual();
        if($carrito == null){return response()->badRequest([], 'Error al recuperar carrito: El usuario no cuenta con un carrito creado');}
        //Crea un pedido en el carrito del usuario logueado
        $producto = Producto::find($request->producto_id);
        $pedido = new Pedido();
        $pedido->carrito()->associate($carrito);
        $pedido->producto()->associate($producto);
        //calcular importe
        $pedido->cantidad = $request->cantidad;
        $pedido->importe = $producto->precio * $pedido->cantidad;
        $pedido->save();
        //sumar al importe total del carrito
        $carrito->importe = $carrito->importe + $pedido->importe;
        $carrito->save();

        return response()->ok($pedido);
    }

    public function update(Request $request){
        $request->validate([
            'id' => 'required|integer|exists:pedidos,id',
            'cantidad' => 'required|integer|min:1'
        ]);
        
        $pedido = Pedido::find($request->id);
        //guardar la diferencia de cantidades
        $diferencia = $pedido->cantidad - $request->cantidad;
        //calcular importe
        $pedido->cantidad = $request->cantidad;
        $pedido->importe = $pedido->producto->precio * $pedido->cantidad;
        $pedido->save();
        //sumar al importe total del carrito
        $carrito = $pedido->carrito;
        $carrito->importe = $carrito->importe - ($diferencia * $pedido->producto->precio);
        $carrito->save();
        return response()->ok($pedido);
    }

    public function destroy(Request $request){
        $pedido = Pedido::find($request->id);
        //restar al importe total del carrito
        $carrito = $pedido->carrito;
        $carrito->importe = $carrito->importe - ($pedido->importe * $pedido->cantidad);
        $carrito->save();
        // eliminar el pedido
        $pedido->delete();
        return response()->ok($pedido);
    }
}
