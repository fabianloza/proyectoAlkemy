<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::prefix('v1')->group(function(){

    Route::middleware(['api', 'auth:api'])->group(function(){
        Route::prefix('auth')->group(function(){
            Route::post('/login', 'AuthController@login')->withoutMiddleware(['auth:api']);
            Route::post('/register', 'AuthController@register')->withoutMiddleware(['auth:api']);
            Route::post('/logout', 'AuthController@logout');
        });

        Route::get('/usuarios', 'UsuarioController@index');
        Route::get('/usuario', 'UsuarioController@show'); // Muestra al usuario logueado
        Route::put('/usuario', 'UsuarioController@update'); //Modifica al usuario logueado
        Route::post('/usuarios', 'UsuarioController@store');

        Route::get('/productos', 'ProductoController@index');
        Route::get('/productos/{id}', 'ProductoController@show');
        Route::post('/productos', 'ProductoController@store');
        Route::put('/productos/{id}', 'ProductoController@update');
        Route::delete('/productos/{id}', 'ProductoController@destroy');

        Route::get('/categorias', 'CategoriaController@index');
        Route::get('/categorias/{id}', 'CategoriaController@show');
        Route::post('/categorias', 'CategoriaController@store');
        Route::put('/categorias/{id}', 'CategoriaController@update');

        Route::get('/metodos-pago', 'MetodoPagoController@index');
        Route::get('/metodos-pago/{id}', 'MetodoPagoController@show');
        Route::post('/metodos-pago', 'MetodoPagoController@store');
        Route::put('/metodos-pago/{id}', 'MetodoPagoController@update');

        Route::get('/carrito', 'CarritoController@show'); // Muestra el carrito del usuario logueado si es que tiene uno y no esta finalizado
        Route::post('/carritos', 'CarritoController@store'); // Crear un carrito para el usuario logueado
        Route::delete('/carritos', 'CarritoController@destroy'); // Elimina el carrito del usuario logeado
        Route::get('/carritos/productos', 'CarritoController@listadoDeProductos'); // Muestra los productos del carrito del usuario logueado
        Route::delete('/carritos/productos', 'CarritoController@vaciarCarrito'); // Elimina todos los productos del carrito del usuario logueado

        Route::get('/ordenes', 'OrdenController@index');
        Route::get('/orden', 'OrdenController@show'); // Muestra la orden en curso del usuario logueado
        Route::post('/ordenes', 'OrdenController@store'); // Verifica si el usuario logeado tiene un carrito y si es asi le crea una orden
        Route::put('/ordenes', 'OrdenController@update'); // Modifica la orden del usuario logueado

        Route::get('/pedidos', 'PedidoController@index');
        Route::get('/pedidos/{id}', 'PedidoController@show'); 
        Route::post('/pedidos', 'PedidoController@store');
        Route::put('/pedidos/{id}', 'PedidoController@update');
        Route::delete('/pedidos/{id}', 'PedidoController@destroy');
    });
});
    

