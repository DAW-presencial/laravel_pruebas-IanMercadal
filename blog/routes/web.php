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

Route::group(['prefix' => '/contactos', 'middleware' => 'auth'],(function () {
    Route::get('/',[ContactosController::class, 'index'])->name('contactos.index');
    Route::get('/create',[ContactosController::class, 'create'])->name('contactos.create');
    Route::post('/',[ContactosController::class, 'store'])->name('contactos.store');
    Route::get('/{contacto}',[ContactosController::class, 'show'])->name('contactos.show');
    Route::get('/{contacto}/edit',[ContactosController::class, 'edit'])->name('contactos.edit');
    Route::put('/{contacto}',[ContactosController::class, 'update'])->name('contactos.update');
    Route::delete('/{contacto}', [ContactosController::class,'destroy'])->name('contactos.destroy');
}));

require __DIR__.'/auth.php';
