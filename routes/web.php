<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegistroController; // Aquí corregimos la capitalización
use App\Http\Controllers\ProductoController; // Aquí corregimos la capitalización

Route::get('/', function () {
    return view('welcome');
});

//Route::get("/registro",[RegistroController::class, 'registro']);
//Route::get("/producto", [ProductoController::class, 'producto']);

Route::get('/registro', function () {
    return view('registro');
});

// Corregimos la definición de la ruta de producto1 para incluir el método name()
Route::get('/producto1', function () {
    return view('producto1');
})->name('producto1'); // Aquí se coloca correctamente el método name()



Route::get('/producto2', function () {
    return view('producto2');
})->name('producto2');


Route::get('/producto3', function () {
    return view('producto3');
})->name('producto3');
