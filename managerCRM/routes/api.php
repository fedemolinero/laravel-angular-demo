<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TipoProductoController;

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

Route::get('/tipo-producto', [TipoProductoController::class, 'index']);
Route::post('/tipo-producto', [TipoProductoController::class, 'store']);
Route::get('/tipo-producto/{id}', [TipoProductoController::class, 'show']);
Route::put('/tipo-producto/{id}', [TipoProductoController::class, 'update']);
Route::delete('/tipo-producto/{id}', [TipoProductoController::class, 'destroy']);
