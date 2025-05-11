<?php

use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubscriberController;
use App\Http\Controllers\Themecontroller;
use Illuminate\Support\Facades\Route;



    //       *********** THEME ROUTES ************
Route::controller(Themecontroller::class)->name('theme.')->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/category', 'category')->name('category');
    Route::get('/category/travel', 'travel')->name('travel');
    Route::get('/category/business', 'business')->name('business');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/single-blog','single_blog')->name('single-blog');
    
});

    //       *********** SUBSCRIBER STORE ROUTES ************
Route::post('/subscriber/store',[SubscriberController::class,'store'])->name('subscriber.store');


    //       *********** CONTACT STORE ROUTES ************
    Route::post('/contact/store',[ContactsController::class,'store'])->name('contact.store');







require __DIR__.'/auth.php';


    // Route::get('/', function () {
    //     return view('welcome');
    // });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

