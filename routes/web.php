<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', [BookController::class, 'index']);
Route::get('/books', [BookController::class, 'index']);
Route::get('/books/create',[BookController::class, 'create']);
Route::post('/books', [BookController::class, 'store']);
Route::get('/books/{id}/edit', [BookController::class, 'edit']);
Route::put('/books/{id}', [BookController::class, 'update']);
Route::delete('/books/{id}', [BookController::class, 'destroy']);
Route::get('/books/{id}', [BookController::class, 'show'])->whereNumber('id');

