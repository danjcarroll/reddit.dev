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
});

Route::get('/sayhello/{name}',function($name = 'World'){
	return 'Hello '.$name;
});

Route::get('/uppercase/{word?}',function($word = 'word'){
	return strtoupper($word);
});

Route::get('/increment/{number?}',function($number = 0){
	return $number + 1;
});

Route::get('/add/{a?}/{b?}',function($a,$b){
	return $a + $b;
});