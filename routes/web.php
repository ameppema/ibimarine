<?php

use App\Http\Controllers\MailReservationRequestController;
use Illuminate\Support\Facades\App;
use App\Models\Boat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationsController;
use App\Models\Contact;
use App\Models\Event;
use App\Models\HomeCard;
use App\Models\News;
use App\Models\Toy;

Route::get('/locale/{locale}', function($locale = 'es'){
    // $prev_url = url()->previous();
    // $prev_req = app('request')->create($prev_url);
    // $prev_segmets = $prev_req->segments();

    // $prev_segmets[0] = $locale;
    // return redirect()->to(implode('/', $prev_segmets));
    App::setLocale($locale);
    session()->put('locale', $locale);
    return back();
})->name('setlocale');


Route::middleware('lang')->group(function(){

/* Main Pages */
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/rent', function () {
    $boats = Boat::getRentBoats(['id', 'name', 'description', 'is_recomended','slug', 'low_season_price as price']);
    return view('pages.rent.rent', compact('boats'));
})->name('rent');

Route::get('/rent/boat/{boat_slug}', function ($boat_slug) {
    $boat = Boat::where('slug', $boat_slug)->first();
    return view('pages.rent.rentShow', compact('boat'));
})->name('rent.show');

Route::post('/rent/show', [MailReservationRequestController::class, 'rentEmail'])->name('reservation.rent.mail');

Route::get('/sale', function () {
    $boats = Boat::getSaleBoats(['id', 'name', 'description','slug','brand_id']);
    return view('pages.sale.sale', compact('boats'));
})->name('sale');

Route::get('/sale/boat/{boat_slug}', function ($boat_slug) {
    $boat = Boat::where('slug', $boat_slug)->first();
    return view('pages.sale.saleShow', compact('boat'));
})->name('sale.show');

Route::post('/sale/show', [MailReservationRequestController::class, 'saleEmail'])->name('reservation.sale.mail');


Route::get('/toys', function () {
    $toys = Toy::all(['id','title','description','image']);
    return view('pages.toys', compact('toys'));
})->name('toys');

Route::get('/events', function () {
    $events = Event::all(['id', 'description', 'image']);
    return view('pages.events', compact('events'));
})->name('events');

Route::get('/news', function () {
    $news = News::all(['id', 'description', 'image']);
    return view('pages.news.newsIndex', compact('news'));
})->name('news');

Route::get('/news/show/{news}', function (News $news) {
    return view('pages.news.newsShow', compact('news'));
})->name('news.show');

Route::get('/contact', function () {
    $contact = HomeCard::where('route', 'contact')->first(['id','description','image']) ?? Contact::first(['id','description','image']);
    return view('pages.contact', compact('contact'));
})->name('contact');


// Legal

Route::view('terms-and-conditions','legal.termsandconditions')->name('legal.terms');

Route::view('privacy-policy','legal.privacy')->name('legal.privacy');

Route::view('data-protection','legal.privacy')->name('legal.dataprotection');

Route::view('cookies-policy','legal.cookies')->name('legal.cookies');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


// Reservations
Route::middleware(['auth','lang'])->group( function(){
    Route::get('/calendar',[ReservationsController::class, 'index'])->name('admin.calendar');
    Route::get('/reservation',[ReservationsController::class, 'create'])->name('admin.reservation');
    Route::get('/reservation/byAjax',[ReservationsController::class, 'getByAjax'])->name('admin.reservation.ajax');
    Route::post('/reservation/store',[ReservationsController::class, 'store'])->name('admin.reservation.store');
    Route::post('/reservation/update',[ReservationsController::class, 'update'])->name('admin.reservation.update');
    Route::get('/reservation/show/{reservationId?}',[ReservationsController::class, 'getOneByAjax'])->name('admin.reservation.getOneByAjax');
    Route::get('/reservation/delete/{reservation}',[ReservationsController::class, 'destroy'])->name('admin.reservation.delete');
});

