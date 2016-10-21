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
Route::get('/ipsums', 'IpsumController@show')->name('ipsum.show');
Route::post('/ipsums', 'IpsumController@post')->name('ipsum.show');

/**
* User resources
*/
# Ipsum landing page, display form
Route::get('/users', 'UserController@show')->name('user.show');

# Display ipsum text --?? Should these all reference the same page??--

/**
* Password resources
*/
# Ipsum landing page, display form
Route::get('/passwords', 'PasswordController@show')->name('password.show');
Route::post('/passwords', 'PasswordController@post')->name('password.show');
/**
* Prctice resources
*/
Route::get('/practice', 'PracticeController@index')->name('practice.index');
for($i = 0; $i < 100; $i++) {
    Route::get('/practice/'.$i, 'PracticeController@example'.$i)->name('practice.example'.$i);
}
