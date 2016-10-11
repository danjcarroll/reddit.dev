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

Route::get('/', function () {
	$name = 'Dan';
	$data['name'] = $name;
    return view('welcome')->with($data);
    //or return view('welcome',$data);
});

Route::get('/uppercase/{word?}','HomeController@uppercase');

Route::get('/increment/{number?}','HomeController@increment');

Route::get('/rolldice/{guess?}','HomeController@rolldice');

Route::get('/add/{a?}/{b?}',function($a,$b){
	return $a + $b;
});

Route::get('/sayhello/{name}',function($name = 'World'){
	return 'Hello '.$name;
});

