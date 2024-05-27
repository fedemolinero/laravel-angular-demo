<?php

use App\Modules\Empresas\Controllers\EmpresasController;
use App\Modules\Posiciones\Controllers\PosicionesController;
use App\Modules\Productos\Controllers\ProductosController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

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

Route::get('/install', function () {
    Artisan::call('migrate');
    Artisan::call('db:seed --class=ProductosSeeder');
    Artisan::call('db:seed --class=EmpresasTableSeeder');
    Artisan::call('db:seed --class=PosicionesTableSeeder');

    return 'Instalación completada';
});

Route::get('/empresas', [EmpresasController::class, 'index']);
Route::get('/productos', [ProductosController::class, 'listarProductosOrdenados']);
Route::get('/posiciones', [PosicionesController::class, 'index']);
Route::post('/posiciones', [PosicionesController::class, 'store']);
