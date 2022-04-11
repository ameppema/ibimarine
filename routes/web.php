<?php

use Illuminate\Support\Facades\Route;

/* Main Pages */
Route::get('/', function () {
    return view('home');
});

Route::get('/rent', function () {
    return view('pages.rent.rent');
});

Route::get('/rent/show', function () {
    return view('pages.rent.rentShow');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
