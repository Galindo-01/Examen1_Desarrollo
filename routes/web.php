<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\EmpleadoController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProveedorController;
use App\Http\Controllers\ClienteController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/categorias', [CategoriaController::class, 'index'])->name('categorias.index');
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/productos', [ProductoController::class, 'index'])->name('productos.index');
Route::get('/proovedores', [ProveedorController::class, 'index'])->name('proovedores.index');
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
