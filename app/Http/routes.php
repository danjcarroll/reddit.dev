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

Route::get('/sayhello/{name}',function($name = 'World'){
	return 'Hello '.$name;
});

Route::get('/uppercase/{word?}',function($word = 'word'){
	$data['word'] = $word;
	$data['upperword'] = strtoupper($word);
 	return view('uppercase')->with($data);
});

Route::get('/increment/{number?}',function($number = 0){
	$data['number'] = $number;
	return view('increment')->with($data);
});

Route::get('/add/{a?}/{b?}',function($a,$b){
	return $a + $b;
});

Route::get('/rolldice/{guess?}',function($guess = 1){

	$roll = mt_rand(1,6);
	$data['roll'] = $roll;
	$data['guess'] = $guess;
	$data['correct'] = ($roll == $guess);

	return view('roll-dice')->with($data);
});


