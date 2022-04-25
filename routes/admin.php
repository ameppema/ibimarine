<?php

DB::listen( function($query){
    // echo '<pre>' . $query->sql . '</pre>';
});

use App\Http\Controllers\BoatController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ReservationsController;
use App\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.index');
})->name('admin');

// Gallery - Images

Route::post('/upload-file', [ImagesController::class, 'store'])->name('image.upload');
Route::get('/destroy-file/{image_id}', [ImagesController::class, 'destroy'])->name('image.destroy');
Route::post('/change-file', [ImagesController::class, 'update'])->name('image.update');

// Employs and brokers

// Reservations
Route::get('/calendar',[ReservationsController::class, 'index'])->name('admin.calendar');
Route::get('/reservation',[ReservationsController::class, 'create'])->name('admin.reservation');
Route::get('/reservation/byAjax',[ReservationsController::class, 'getByAjax'])->name('admin.reservation.ajax');
Route::post('/reservation/store',[ReservationsController::class, 'store'])->name('admin.reservation.store');
Route::post('/reservation/update',[ReservationsController::class, 'update'])->name('admin.reservation.update');
Route::get('/reservation/show/{reservationId?}',[ReservationsController::class, 'getOneByAjax'])->name('admin.reservation.getOneByAjax');
Route::get('/reservation/delete/{reservation}',[ReservationsController::class, 'destroy'])->name('admin.reservation.delete');


// Admin and Editor

// Boat - Rent/Sale
Route::get('/rent/new', [BoatController::class, 'addRent'])->name('admin.rent');
Route::post('/rent/new', [BoatController::class, 'storeBoat'])->name('admin.rent.store');
Route::get('/rent/edit/{boat}', [BoatController::class, 'edit'])->name('admin.rent.edit');
Route::post('/rent/edit/{boat}', [BoatController::class, 'update'])->name('admin.rent.update');
Route::post('/rent/delete/{boat}', [BoatController::class, 'destroy'])->name('admin.rent.destroy');

Route::get('/sale/new', [BoatController::class, 'addSale'])->name('admin.sale');
Route::get('/sale/edit/{boat}', [BoatController::class, 'editSale'])->name('admin.sale.edit');

// Boat - Roles & Permissions
Route::get('/manage-roles', [RolesController::class, 'index'])->name('admin.roles');
Route::get('/manage-permissions', [PermissionsController::class, 'index'])->name('admin.permissions');
Route::post('/manage-roles/set-role-ajax', [RolesController::class, 'setByAjax'])->name('admin.roles.setByAjax');
Route::post('/manage-roles/set-permission-ajax', [PermissionsController::class, 'setByAjax'])->name('admin.permission.setByAjax');
