<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PruebaController;
use App\Http\Controllers\UsuarioController;

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

// Route::get('/saludo', 'PruebaController@saludar');

Route::get('saludo', [PruebaController::class, 'saludar']);
Route::post('saludo', [PruebaController::class, 'despedir']);
Route::get('saludo/{mensaje}', [PruebaController::class, 'conversar']);

Route::post('usuario/nuevo', [UsuarioController::class, 'crear']);
Route::put('usuario/{id}', [UsuarioController::class, 'actualizar']);