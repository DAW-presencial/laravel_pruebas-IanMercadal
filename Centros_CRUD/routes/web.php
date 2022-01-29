<?php

use App\Http\Controllers\CentroController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;


App::setlocale('es');

// Rutas creadas resource
Route::resource('centros', CentroController::class);

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/set_language/{lang}', [App\Http\Controllers\Controller::class, 'set_language'])->name('set_language');
