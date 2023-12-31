<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/teste', function () {
//     return view('welcome');
// });

Route::prefix('produtos')->group(function(){

    Route::get('/', [ProdutosController::class, 'index'])->name('produtos-index');
    Route::get('/create', [ProdutosController::class, 'create'])->name('produtos-create');
    Route::post('/', [ProdutosController::class, 'store'])->name('produtos-store');
    Route::get('/{id}/edit', [ProdutosController::class, 'edit'])->where('id', '[0-9]+')->name('produtos-edit');
    Route::put('/{id}', [ProdutosController::class, 'update'])->where('id', '[0-9]+')->name('produtos-update');
    Route::delete('/{id}', [ProdutosController::class, 'destroy'])->where('id', '[0-9]+')->name('produtos-destroy');
});
