<?php

use App\Http\Controllers\DetalleController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\TipoEmpleadoController;
use App\Http\Controllers\TipoProductoController;
use App\Http\Controllers\TurnoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\VentaController;
use App\Models\TipoEmpleados;
use App\Models\TipoProductos;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('detalles',DetalleController::class)->middleware('auth');
Route::resource('productos',ProductoController::class)->middleware('auth');
Route::resource('tipo-empleado',TipoEmpleadoController::class)->middleware('auth');
Route::resource('tipo_productos',TipoProductoController::class)->middleware('auth');
Route::resource('turno',TurnoController::class)->middleware('auth');
Route::resource('usuarios',UsuarioController::class)->middleware('auth');
Route::resource('venta',VentaController::class)->middleware('auth');