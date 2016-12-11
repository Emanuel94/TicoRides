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
	'uses'=>'RideController@CargarRides'
]);


Route::get('ride/create',[

	'as'=>'ride-create',
	'uses'=>'RideController@create'
]);


// Route::get('ride/update/{id?}', function ($id = null) {
//     return $id;
// });


// Route::get('rides/{id}/update', function ($id) {[
//     'uses'=>'RideController@update'
// 	]
    
// })->name('update');

Route::get('ride/update/{id}',[

	'as'=>'ride.update',
	'uses'=>'RideController@update'

	]);




Route::get('/api/rides',function(){

	return Datatables::queryBuilder(DB::table('rides')->where(' ',Auth::id()))

									->make(true);

		
});
	
// Route::get('/', function () {
//     return view('TicoRide');
// })
