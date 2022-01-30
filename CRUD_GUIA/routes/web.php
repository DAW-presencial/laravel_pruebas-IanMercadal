<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('contactos', ContactoController::class)->middleware(['auth'])
->parameters(['contactos' => 'contacto']);

require __DIR__.'/auth.php';
