<?php
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\PosicionController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});