<?php

use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::put('books/toggle-read', [BooksController::class, 'toggleRead']);
Route::resource('books', BooksController::class);