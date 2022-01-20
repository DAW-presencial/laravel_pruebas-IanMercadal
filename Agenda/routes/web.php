<?php

use App\Http\Controllers\ContactoController;
use App\Models\Contacto;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


// Contactos
Route::resource('contactos', ContactoController::class);

require __DIR__.'/auth.php';
