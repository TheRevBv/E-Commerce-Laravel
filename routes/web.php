<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/productos-clientes', [ProductoController::class, 'index'])->name('producto.index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/productos', [ProductoController::class, 'index2'])->name('producto.index2');
    Route::post('/productos', [ProductoController::class, 'store'])->name('producto.store');
    Route::get('/productos/{id}', [ProductoController::class, 'show'])->name('producto.show');
    Route::put('/productos/{id}', [ProductoController::class, 'update'])->name('producto.update');
    Route::delete('/productos/{id}', [ProductoController::class, 'destroy'])->name('producto.destroy');
});

/*Route::get('/productos', [ProductoController::class, 'index2'])->name('producto.index2');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');
Route::delete('/producto/{id}', [ProductoController::class, 'destroy'])->name('producto.destroy');
Route::put('/producto-edit/{id}', [ProductoController::class, 'update'])->name('producto.update');
Route::get('/producto', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store');*/
