<?php

use App\Http\Controllers\BookStoreController;
use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

//CRUD
Route::get('/bookstore', [BookStoreController::class,'index'])->name('book.index');
Route::get('/bookstore/create', [BookStoreController::class,'create'])->name('book.create');
Route::get('/bookstore/{id}/edit', [BookStoreController::class,'edit'])->name('book.edit');
Route::delete('/bookstore/{id}', [BookStoreController::class,'destroy'])->name('book.destroy');
//Route::post('/bookstore/{id}', [BookStoreController::class, 'update'])->name('book.update');
Route::post('/bookstore', [BookStoreController::class,'store'])->name('book.store');
Route::put('/bookstore/{id}', [BookStoreController::class,'update'])->name('book.update');