<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('pages/home');
});


Route::post('/vue', [PostController::class, 'getFilm']);

Route::get('/vue/{id}', [PostController::class, 'getFilmById'])->name('film.show');
