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
Route::get('/sale', function () {
    return view('pages.sale.sale');
});
Route::get('/sale/show', function () {
    return view('pages.sale.saleShow');
});
Route::get('/toys', function () {
    return view('pages.toys');
});
Route::get('/contact', function () {
    return view('pages.contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
