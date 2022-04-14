<?php

use App\Http\Controllers\BoatController;
use App\Http\Controllers\ReservationsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
})->name('admin');

// Employs and brokers

Route::get('/calendar',[ReservationsController::class, 'index'])->name('admin.calendar');

Route::post('/reservation',[ReservationsController::class, 'create'])->name('admin.reservation');


// Admin and Editor

// Boat - Rent/Sale
Route::get('/add-rent-boat', [BoatController::class, 'addRent'])->name('admin.rent');
Route::post('/add-rent-boat', [BoatController::class, 'storeBoat'])->name('admin.rent.store');
