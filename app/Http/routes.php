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

/* START LOGIN */
Route::get('/', 'login@index');
Route::get('/validation', 'login@index');
Route::post('/validation', 'login@validation');
/* ENd LOGIN */

/* START HOME */
Route::get('/home', [
	'middleware' => 'authorize',
	'uses' => 'home@index',
]);
/* START HOME */