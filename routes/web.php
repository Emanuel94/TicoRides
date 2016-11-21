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
/* Tipos de rutas entre otras.
get, post, put, delete, resource
*/
Route::get('/', function () {
    return view('TicoRide');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('ride','RideController');

Route::get('ride/index',[

	'as'=>'ride-index',
	'uses'=>'RideController@index'
]);

Route::get('ride/create',[

	'as'=>'ride-create',
	'uses'=>'RideController@create'
]);

// Route::get('/', function () {
//     return view('TicoRide');
// });
