<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Categoriaontroller;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/cliente', [ClienteController::class, 'index']);
Route::get('/empleado', [EmpleadoController::class, 'index']);
Route::get('/pedidos', [PedidoController::class, 'index']);
Route::get('/productos', [productoController::class, 'index']);
Route::get('/proveedores', [ProveedorController::class, 'index']);
