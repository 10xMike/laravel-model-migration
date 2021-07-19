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
/* Home Route*/
Route::get('/', function () {
    return view('home');
})->name('home');

/* Trips Route */
Route::get('trips', function () {
    return view('trips.index');
});
Route::get('/trips', 'TripsController@index')->name('trips');

/* About Route */
Route::get('about', function () {
    return view('pages.about');
})->name('about');

/* Products Route */
Route::get('products', function () {
    return view('products');
})->name('products');
Route::get('products/{id}', function ($id) {
    return 'this is product ' . $id;
})->name('product');

/* Services Route */
Route::get('services', function () {
    return view('services');
})->name('services');

/* Users Route */
Route::get('users', function () {
    return view('users');
})->name('users');
Route::get('users/{userId}/comments/{commentId}', function ($userId, $commentId) {
    //
})->name('user');

Route::resource('trips', 'TripsController');

Route::get('/', 'PagesController@index');
Route::get('about', 'PagesController@about');
Route::get('services', 'PagesController@services');
Route::get('trips', 'TripsController@index');
