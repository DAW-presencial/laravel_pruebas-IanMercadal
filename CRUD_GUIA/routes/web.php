<?php

use App\Http\Controllers\ContactoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('contactos', ContactoController::class)->middleware(['auth'])
->parameters(['contactos' => 'contacto']);

Route::get('/set_language/{lang}', [App\Http\Controllers\Controller::class, 'set_language'])->name('set_language');

require __DIR__.'/auth.php';
