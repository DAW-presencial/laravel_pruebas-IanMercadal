<?php

use Illuminate\Support\Facades\Route;

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
