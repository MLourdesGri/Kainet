<?php

use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\PosicionController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;

Route::get('/productos', [ProductoController::class, 'index']);
Route::get('/empresas', [EmpresaController::class, 'index']);
Route::post('/posiciones', [PosicionController::class, 'store']);
Route::get('/posiciones', [PosicionController::class, 'index']);