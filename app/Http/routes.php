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
    return view('welcome');
});

Route::get('/sayhello/{name}',function($name='World'){
	return 'Hello '.$name;
});


Route::get('/uppercase/{stringVar?}',function($stringVar){
	return strtoupper($stringVar);
});

Route::get('/increment/{numVar?}',function($numVar){
	return $numVar + 1;
});

Route::get('/add/{firstnum?}&{secondnum?}',function($firstNum,$secondNum){
	return $firstNum + $secondNum;
});