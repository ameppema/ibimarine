<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
})->name('admin');

// Employs and brokers
Route::get('/reservation', function () {
    return view('admin.reservation.reservations');
})->name('admin.reservation');

Route::get('/calendar', function () {
    return view('admin.reservation.calendar');
})->name('admin.calendar');


// Admin and Editor
Route::get('/add-rent', function () {
    return view('admin.sections.addRent');
})->name('admin.rent');
