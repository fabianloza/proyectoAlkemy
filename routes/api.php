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
Route::put('/metodos-pago', 'MetodoPagoController@update');


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

Route::get('/pedidos', 'PedidoController@index');
Route::get('/pedidos/{id}', 'PedidoController@show');
Route::post('/pedidos', 'PedidoController@store');
