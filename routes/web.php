<?php

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

Auth::routes();
Route::group(['middleware' => 'auth'], function() {
    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('reviews', 'ReviewController');

    Route::get('/factory', function() {
        return view('factory');
    })->name('factory');

    Route::get('/app', function() {
        return view('layouts.app');
    })->name('app');
});
