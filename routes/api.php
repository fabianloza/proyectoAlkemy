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

Route::post('/usuarios', 'UsuarioController@store');
Route::put('/usuarios/{id}', 'UsuarioController@update');

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
Route::post('/metodos-pago', 'MetodoPagoController@store');
Route::put('/metodos-pago/{id}', 'MetodoPagoController@update');

Route::get('/carritos', 'CarritoController@index');
Route::get('/carritos/{id}', 'CarritoController@show');
Route::post('/carritos', 'CarritoController@store');
Route::put('/carritos/{id}', 'CarritoController@update');
Route::delete('/carritos/{id}', 'CarritoController@destroy');

Route::get('/ordenes/{id}', 'OrdenController@show');
Route::post('/ordenes', 'OrdenController@store');
Route::put('/ordenes/{id}', 'OrdenController@update');

Route::get('/stock/{id}', 'StockController@show');
Route::put('/stock/{id}', 'StockController@update');
Route::post('/stock', 'StockController@store');

//Mismas rutas con esta sintaxis Route::post('/saludo/{mensaje}', [PruebaController::class, 'despedir']);
/*
Route::post('/usuarios', [UsuarioController::class, 'store']);
Route::put('/usuarios/{id}', [UsuarioController::class, 'update']);

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/productos/{id}', [ProductoController::class, 'show']);
Route::post('/productos', [ProductoController::class, 'store']);
Route::put('/productos/{id}', [ProductoController::class, 'update']);
Route::delete('/productos/{id}', [ProductoController::class, 'destroy']);

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/categorias/{id}', [CategoriaController::class, 'show']);
Route::post('/categorias', [CategoriaController::class, 'store']);
Route::put('/categorias/{id}', [CategoriaController::class, 'update']);

Route::get('/metodos-pago', [MetodoPagoController::class, 'index']);
Route::post('/metodos-pago', [MetodoPagoController::class, 'store']);
Route::put('/metodos-pago/{id}', [MetodoPagoController::class, 'update']);

Route::get('/carritos', [CarritoController::class, 'index']);
Route::get('/carritos/{id}', [CarritoController::class, 'show']);
Route::post('/carritos', [CarritoController::class, 'store']);
Route::put('/carritos/{id}', [CarritoController::class, 'update']);
Route::delete('/carritos/{id}', [CarritoController::class, 'destroy']);

Route::get('/ordenes/{id}', [OrdenController::class, 'show']);
Route::post('/ordenes', [OrdenController::class, 'store']);
Route::put('/ordenes/{id}', [OrdenController::class, 'update']);
*/