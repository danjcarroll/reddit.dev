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



Route::get('/uppercase/{word?}','HomeController@uppercase');

Route::get('/increment/{number?}','HomeController@increment');

Route::get('/rolldice/{guess?}','HomeController@rolldice');


// --------------------- Resource Controllers

Route::resource('posts','PostsController');
Route::resource('users','UsersController', ['except'=> ['create', 'store']]);

// --------------------- Authentication
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// --------------------- Registration
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');




