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

    Route::group(['as' => 'review.', 'prefix' => 'review/'], function() {
        Route::resource('likes', 'LikeController');
        Route::resource('comments', 'CommentController');
    });

    Route::resource('connects', 'ConnectionRequestController');

    Route::post('/accept/{id}', 'ConnectionRequestController@accept')->name('connects.accept');

    Route::get('/factory', ['uses' => 'ReviewController@reviewsForAuth'])->name('factory');

    Route::get('/connect', ['uses' => 'ConnectionRequestController@index'])->name('connect');

    Route::post('/comment', ['uses' => 'ReviewController@comment']);

    Route::post('/like', ['uses' => 'ReviewController@like']);

    Route::get('/profile/{id}', [
        'uses' => 'ProfileController@edit',
        'as' => 'profile.edit'
    ]);

    Route::post('/profile/{id}', [
        'uses' => 'ProfileController@update',
        'as' => 'profile.update'
    ]);

    Route::get('/profile/user/{id}', [
        'uses' => 'ReviewController@reviewsForUser',
        'as' => 'user.factory'
    ]);
});
