<?php

use App\Http\Controllers\BoatController;
use App\Http\Controllers\ReservationsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
})->name('admin');

// Employs and brokers

// Reservations
Route::get('/calendar',[ReservationsController::class, 'index'])->name('admin.calendar');
Route::get('/reservation',[ReservationsController::class, 'create'])->name('admin.reservation');
Route::get('/reservation/byAjax',[ReservationsController::class, 'getByAjax'])->name('admin.reservation.ajax');
Route::post('/reservation/store',[ReservationsController::class, 'store'])->name('admin.reservation.store');


// Admin and Editor

// Boat - Rent/Sale
Route::get('/add-rent-boat', [BoatController::class, 'addRent'])->name('admin.rent');
Route::post('/add-rent-boat', [BoatController::class, 'storeBoat'])->name('admin.rent.store');
Route::get('/edit-rent-boat/{boat}', [BoatController::class, 'edit'])->name('admin.rent.edit');
Route::post('/edit-rent-boat/{boat}', [BoatController::class, 'update'])->name('admin.rent.update');
