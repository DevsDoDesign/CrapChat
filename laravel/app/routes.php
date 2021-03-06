<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'SignupController@index');
Route::post('signup', 'SignupController@store');

Route::post('call', 'CallController@index');
Route::post('call/users', 'CallController@listUsers');
Route::post('call/code/{pin}', 'CallController@shortCode');
Route::post('call/code/{pin}/{friendId}', 'CallController@send');

Route::get('/draw', 'DrawController@showDraw');
Route::post('/draw', 'DrawController@storeDrawing');
Route::get('/crap/{key}', 'DrawController@viewCrap');
Route::get('/crap/img/{key}', 'DrawController@viewCrapImg');
Route::get('/crap/classy/{key}', 'DrawController@viewClassyCrapImg');

Route::get('/craps', 'CrapsController@showAllCraps');

