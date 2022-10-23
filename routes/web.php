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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [ProductoController::class, 'index'])->name('producto.index');
Route::get('/producto/{id}', [ProductoController::class, 'show'])->name('producto.show');
Route::delete('/producto/{id}', [ProductoController::class, 'destroy'])->name('product.destroy');
Route::put('/producto/{id}', [ProductoController::class, 'update'])->name('product.update');
Route::get('/producto', [ProductoController::class, 'create'])->name('producto.create');
Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store');
