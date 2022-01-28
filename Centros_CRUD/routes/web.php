<?php

use App\Http\Controllers\CentroController;
use Illuminate\Support\Facades\Route;

// Rutas creadas resource
Route::resource('centros', CentroController::class);

Route::get('/', function () {
    return view('welcome');
});
