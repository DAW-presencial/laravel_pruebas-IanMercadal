<?php

use App\Http\Controllers\CentroController;
use Illuminate\Support\Facades\Route;


Route::resource('centros', CentroController::class);

Route::get('/', function () {
    return view('welcome');
});
