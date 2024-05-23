<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\PosicionesController;
use App\Http\Controllers\EmpresasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/empresas', [EmpresasController::class, 'index']);
Route::get('/productos', [ProductosController::class, 'listarProductosOrdenados']);
Route::get('/posiciones', [PosicionesController::class, 'index']);
Route::post('/posiciones', [PosicionesController::class, 'store']);

