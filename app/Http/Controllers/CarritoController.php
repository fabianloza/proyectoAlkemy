<?php

namespace App\Http\Controllers;

use App\Models\Carrito;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarritoController extends Controller
{
    private $no_carrito_mensaje = 'Error al recuperar carrito: El usuario no cuenta con un carrito creado';

    public function show(){
        $carrito = Carrito::carritoUsuarioActual();
        if($carrito == null){return response()->badRequest([], $this->no_carrito_mensaje);}
        return response()->ok($carrito);
    }

    public function store(){
        $usuario = Usuario::find(Auth::user()->id);
        $carrito = $usuario->carritos()->where('finalizado', false)->first();
        if($carrito != null)
        {return
            response()
            ->badRequest([], 'Error al intentar crear un carrito: El usuario ya cuenta con un carrito creado');
        }
        
        $carrito = new Carrito();
        $carrito->usuario()->associate($usuario);
        $carrito->save();
        return response()->created($carrito);
    }

    public function destroy(){
        $carrito = Carrito::carritoUsuarioActual();
        if($carrito == null){return response()->badRequest([], $this->no_carrito_mensaje);}
        $carrito->finalizado = true;
        $carrito->save();
        return response()->ok($carrito);
    }

    public function listadoDeProductos(){
        //Muestra los productos del carrito del usuario logueado
        $carrito = Carrito::carritoUsuarioActual();
        if($carrito == null){return response()->badRequest([], $this->no_carrito_mensaje);}
        $pedidos = $carrito->pedidos()->with('producto')->get();
        //Formato de respuesta
        $response = [];
        foreach ($pedidos as $pedido) {
            $response[] = [
                'id' => $pedido->producto->id,
                'nombre' => $pedido->producto->nombre,
                'precio' => $pedido->producto->precio,
                'cantidad' => $pedido->cantidad,
                'importe' => $pedido->importe
            ];
        }
        return response()->ok($response);
    }

    public function vaciarCarrito(){
        $carrito = Carrito::carritoUsuarioActual();
        if($carrito == null){return response()->badRequest([], $this->no_carrito_mensaje);}
        $carrito->pedidos()->delete();
        $carrito->importe = 0;
        $carrito->save();
        return response()->ok($carrito);
    }
}
