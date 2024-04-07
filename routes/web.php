<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource(
    'empresas',
   \App\Http\Controllers\EmpresasController::class
);

