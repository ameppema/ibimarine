<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/rent', function () {
    return view('page.rent.rentIndex');
})->name('rent');
Route::get('/rentShow', function () {
    return view('page.rent.rentShow');
})->name('rent.show');

Route::get('/sale', function () {
    return view('page.sale.saleIndex');
})->name('sale');
Route::get('/saleShow', function () {
    return view('page.sale.saleShow');
})->name('sale.show');

Route::get('/events', function () {
    return view('page.events');
})->name('events');

Route::get('/news', function () {
    return view('page.news.newsIndex');
})->name('news');

Route::get('/contact', function () {
    return view('page.contact');
})->name('contact');

Route::get('/toys', function () {
    return view('page.toys');
})->name('toys');
