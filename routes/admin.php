<?php

DB::listen( function($query){
    // echo '<pre>' . $query->sql . '</pre>';
});

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BoatController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PermissionsController;
use App\Http\Controllers\ToyController;
use App\Http\Controllers\UserController;

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
Route::post('/menu/delete', [MenuController::class, 'delete'])->name('admin.menu.delete');

// Contact

Route::get('/contact',[ContactController::class, 'index'])->name('admin.contact');
Route::post('/contact',[ContactController::class, 'update'])->name('admin.contact.update');

// Toys

Route::get('/toys', [ToyController::class, 'index'])->name('admin.toys');
Route::post('/toys', [ToyController::class, 'store'])->name('admin.toys.store');
Route::get('/toys/{toy}/edit', [ToyController::class, 'edit'])->name('admin.toys.edit');
Route::put('/toys/{toy}', [ToyController::class, 'update'])->name('admin.toys.update');
Route::delete('/toys/{toy}', [ToyController::class, 'delete'])->name('admin.toys.delete');

// Events

Route::get('/events', [EventController::class, 'index'])->name('admin.events');
Route::post('/events', [EventController::class, 'store'])->name('admin.events.store');
Route::get('/events/{event}/edit', [EventController::class, 'edit'])->name('admin.events.edit');
Route::put('/events/{event}', [EventController::class, 'update'])->name('admin.events.update');
Route::delete('/events/{event}', [EventController::class, 'delete'])->name('admin.events.delete');

// News

Route::get('/news', [NewsController::class, 'index'])->name('admin.news');
Route::post('/news', [NewsController::class, 'store'])->name('admin.news.store');
Route::get('/news/{news}/edit', [NewsController::class, 'edit'])->name('admin.news.edit');
Route::put('/news/{news}', [NewsController::class, 'update'])->name('admin.news.update');
Route::delete('/news/{news}', [NewsController::class, 'delete'])->name('admin.news.delete');

// Users

Route::get('/users', [UserController::class, 'index'])->name('admin.users');
Route::post('/users', [UserController::class, 'store'])->name('admin.users.store');
Route::get('/users/ajax/{user?}', [UserController::class, 'getUserByAjax'])->name('admin.users.getByAjax');
Route::put('/users', [UserController::class, 'update'])->name('admin.users.update');
Route::delete('/users', [UserController::class, 'delete'])->name('admin.users.delete');

// Profile

Route::get('/profile', [UserController::class, 'profile'])->name('admin.profile');
Route::patch('/profile/{user}', [UserController::class, 'updateProfile'])->name('admin.profile.update');

// Brand

Route::get('/brands', [BrandController::class, 'index'])->name('admin.brands');
Route::post('/brands', [BrandController::class, 'store'])->name('admin.brands.store');
Route::get('/brands/{id?}', [BrandController::class, 'getByAjax'])->name('admin.brands.getByAjax');
Route::put('/brands', [BrandController::class, 'update'])->name('admin.brands.update');
Route::delete('/brand/{brand}', [BrandController::class, 'delete'])->name('admin.brands.delete');