<?php

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

Route::get('/', function () {
    return view('welcome');
});


Route::group(['prefix'=>'productos'],function (){
    Route::get('/', [ProductoController::class,'index'])->name('productos.index');
    Route::get('show/{producto}', [ProductoController::class,'show'])->name('productos.show');
    Route::get('create', [ProductoController::class,'create'])->name('productos.create');
    Route::post('store', [ProductoController::class,'store'])->name('productos.store');
    Route::get('edit/{producto}', [ProductoController::class,'edit'])->name('productos.edit');
    Route::put('update/{producto}', [ProductoController::class,'update'])->name('productos.update');
    Route::delete('destroy/{producto}', [ProductoController::class,'destroy'])->name('productos.destroy');
});
