<?php

use Illuminate\Support\Facades\Route;

/* Main Pages */
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/rent', function () {
    return view('pages.rent.rent');
})->name('rent');

Route::get('/rent/show', function () {
    return view('pages.rent.rentShow');
})->name('rent.show');

Route::get('/sale', function () {
    return view('pages.sale.sale');
})->name('sale');

Route::get('/sale/show', function () {
    return view('pages.sale.saleShow');
})->name('sale.show');

Route::get('/toys', function () {
    return view('pages.toys');
})->name('toys');

Route::get('/events', function () {
    return view('pages.toys');
})->name('events');

Route::get('/news', function () {
    return view('pages.toys');
})->name('news');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
