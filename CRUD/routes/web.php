<?php

use App\Http\Controllers\ContactoController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Contactos

Route::resource('contactos', ContactoController::class)->middleware(['auth']);


// Route::group(['prefix' => '/contactos', 'middleware' => 'auth'],(function () {
//     Route::get('/',[ContactoController::class, 'index'])->name('contactos.index');
//     Route::get('/create',[ContactoController::class, 'create'])->name('contactos.create');
//     Route::post('/',[ContactoController::class, 'store'])->name('contactos.store');
//     Route::get('/{contacto}',[ContactoController::class, 'show'])->name('contactos.show');
//     Route::get('/{contacto}/edit',[ContactoController::class, 'edit'])->name('contactos.edit');
//     Route::put('/{contacto}',[ContactoController::class, 'update'])->name('contactos.update');
//     Route::delete('/{contacto}', [ContactoController::class,'destroy'])->name('contactos.destroy');
// }));

require __DIR__.'/auth.php';
