<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/welcome', function () {
//     return view('home');
// });

Route::auth();

Route::get('/charityPortal', 'HomeController@index');

Route::get('/welcome', 'HomeController@welcome');

Route::resource('/', 'GuestController@index');

Route::get('/dog', function () {
    return view('dog');
});

Route::get('/charityRegister', function () {
    return view('charityRegister');
});

Route::get('/music', function () {
    return view('music');
});

// Route::get('/searchResults', function () {
//     return view('searchResults');
// });

// Route::get('/{user_id}', 'searchResultsController@show'); 

Route::resource('/searchResults', 'searchResultsController@search'); 

// Route::resource('/searchResults', 'searchResultsController@show'); 

Route::post('/charityPortal', 'HomeController@addItem'); 

// Route::resource('/searchResults', 'searchResultsController@search'); 


