<?php

use App\Http\Controllers\BoatController;
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

// Boat - Rent/Sale
Route::get('/add-rent-boat', [BoatController::class, 'addRent'])->name('admin.rent');
Route::post('/add-rent-boat', [BoatController::class, 'storeBoat'])->name('admin.rent.store');
