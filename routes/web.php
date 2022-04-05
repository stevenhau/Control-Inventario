<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductosController;

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

Route::get('/', function () {
    return view('auth.login');
});

//Esta es la forma de hacerlo especificando cada ruta clase segudo del metodo
/* Route::get('/productos/create', [App\Http\Controllers\ProductosController::class, 'create']);
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

//Esta forma agrega todas las rutas segun los metodos creados en el controlador puedes comprobarlo con "php artisan route:list"
Route::resource('productos',ProductosController::class)->middleware('auth'); 

//
Auth::routes(['register'=>false, 'reset'=>false]);

Route::get('/home', [ProductosController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [ProductosController::class, 'index'])->name('home');
});
