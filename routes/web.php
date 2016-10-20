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
# Process form to return ipsum text
Route::post('/ipsums', 'IpsumController@store')->name('ipsum.store');
# Display ipsum text --?? Should these all reference the same page??--
Route::get('/ipsums/{label}', 'IpsumController@show')->name('ipsums.show');
# Process form to display ipsum text
Route::put('/ipsums/{label}', 'IpsumController@update')->name('ipsums.update');
# The above routes *could* all be replaced with this one line:
# Route::resource('books', 'BookController');


/**
* User resources
*/
# Ipsum landing page, display form
Route::get('/users', 'UserController@show')->name('user.show');

# Display ipsum text --?? Should these all reference the same page??--

# Process form to display ipsum text
Route::put('/users/{name}', 'UserController@update')->name('user.update');
# The above routes *could* all be replaced with this one line:
# Route::resource('books', 'BookController');

/**
* Password resources
*/
# Ipsum landing page, display form
Route::get('/passwords', 'PasswordController@show')->name('password.show');
Route::post('/passwords', 'PasswordController@show')->name('password.show');
/**
* Prctice resources
*/
Route::get('/practice', 'PracticeController@index')->name('practice.index');
for($i = 0; $i < 100; $i++) {
    Route::get('/practice/'.$i, 'PracticeController@example'.$i)->name('practice.example'.$i);
}
