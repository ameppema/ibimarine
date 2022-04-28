<?php

DB::listen( function($query){
    // echo '<pre>' . $query->sql . '</pre>';
});

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoatController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PermissionsController;

Route::get('/', function () {
    return view('admin.index');
})->name('admin');

// Gallery - Images

Route::post('/upload-file', [ImagesController::class, 'store'])->name('image.upload');
Route::get('/destroy-file/{image_id}', [ImagesController::class, 'destroy'])->name('image.destroy');
Route::post('/change-file', [ImagesController::class, 'update'])->name('image.update');

// Admin
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

// Menu
Route::get('/menu', [MenuController::class, 'index'])->name('admin.menu');
Route::post('/menu', [MenuController::class, 'update'])->name('admin.menu.update');

