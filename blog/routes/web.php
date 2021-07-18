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
});

Route::get('/trips', 'TripsController@index')->name('trips');
/* About Route */
Route::get('about', function () {
    return view('about');
});
/* Products Route */
Route::get('products', function () {
    return view('products');
});
Route::get('products/{id}', function ($id) {
    //
});
/* Services Route */
Route::get('services', function () {
    return view('services');
});
/* Users Route */
Route::get('users', function () {
    return view('users');
});
Route::get('users/{userId}/comments/{commentId}', function ($actualUserId, $actualCommentId) {
    //
});
