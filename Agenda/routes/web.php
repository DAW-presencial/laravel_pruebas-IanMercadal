<?php

use App\Http\Controllers\ContactoController;
use App\Models\Contacto;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::resource('contactos', ContactoController::class)->middleware(['auth']);

require __DIR__.'/auth.php';
