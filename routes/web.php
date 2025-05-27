<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EjemploproyectoController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource("ejemploproyecto",EjemploproyectoController::class);
