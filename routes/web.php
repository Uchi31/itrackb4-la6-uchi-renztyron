<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/whoami', function () {
    return 'Renz Tyron Uchi | 2023-70246 | Block 4C | ITRACKB4 Laravel 12';
});

Route::get('/books', [BookController::class, 'index'])
    ->name('books.index');

Route::get('/books/featured', [BookController::class, 'featured'])
    ->name('books.featured');

Route::get('/books/filter/{value?}', [BookController::class, 'filter'])
    ->name('books.filter');

Route::get('/books/{id}', [BookController::class, 'show'])
    ->name('books.show');