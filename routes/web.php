<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('landing');
});

/**
* Ipsum resources
*/
# Ipsum landing page, display form
Route::get('/ipsum', 'IpsumController@show')->name('ipsum.show');
Route::post('/ipsum', 'IpsumController@post')->name('ipsum.show');

/**
* User resources
*/
# Ipsum landing page, display form
Route::get('/user', 'UserController@show')->name('user.show');
Route::post('/user', 'UserController@post')->name('user.show');
# Display ipsum text --?? Should these all reference the same page??--

/**
* Password resources
*/
# Ipsum landing page, display form
Route::get('/password', 'PasswordController@show')->name('password.show');
Route::post('/password', 'PasswordController@post')->name('password.show');
/**
* Prctice resources
*/
Route::get('/practice', 'PracticeController@index')->name('practice.index');
for($i = 0; $i < 100; $i++) {
    Route::get('/practice/'.$i, 'PracticeController@example'.$i)->name('practice.example'.$i);
}
