<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContadorController;

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

// Route::get('/', function () {
//     return 'Holis';
// });

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/visitas', ContadorController::class);

// Route::view('/', 'welcome');
// Route::view('/visitas', 'visitas');

// Route::get('bienvenido', [Cortes::class,'saludar']);

// Route::get('/', ContadorController::class); // Si no le ponemos metodos, es porque hay in function __invoke()
// Route::get('/', [ControladorController::class, 'MiMetodo']);
