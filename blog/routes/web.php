<?php

use App\Http\Controllers\ContactosController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',HomeController::class);

Route::get('/dashboard', function () {
return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Contactos
Route::get('/contactos', function () {
    return view('contactos.index');
})->middleware(['auth'])->name('login.index');

Route::get('/contactos/ver',[ContactosController::class, 'index'])->name('contactos.index');
Route::get('/contactos/create',[ContactosController::class, 'create'])->name('contactos.create');
Route::post('/contactos',[ContactosController::class, 'store'])->name('contactos.store');
Route::get('/contactos/{contacto}',[ContactosController::class, 'show'])->name('contactos.show');
Route::get('/contactos/{contacto}/edit',[ContactosController::class, 'edit'])->name('contactos.edit');
Route::put('/contactos/{contacto}',[ContactosController::class, 'update'])->name('contactos.update');

require __DIR__.'/auth.php';
