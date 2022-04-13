<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.reservation.reservations');
})->name('admin');


Route::get('/reservation', function () {
    return view('admin.index');
})->name('admin.reservation');

Route::get('/calendar', function () {
    return view('admin.reservation.calendar');
})->name('admin.calendar');
