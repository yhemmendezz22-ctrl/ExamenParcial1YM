<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Controller;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class, 'index']);
Route::get('/cliente', [ClienteController::class, 'index']);
Route::get('/empleado', [EmpleadoController::class, 'index']);
Route::get('/pedidos', [PedidosController::class, 'index']);
Route::get('/productos', [productoController::class, 'index']);
Route::get('/proveedores', [ProveedorController::class, 'index']);
