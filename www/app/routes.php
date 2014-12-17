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

Route::get('/',array(
	'as' => 'home',
	'uses' => 'HomeController@Home'
));

Route::get('/partneri', array(
	'as' => 'partneri',
	'uses' => 'HomeController@Partneri'
));

Route::get('/partneri/{id}', array(
	'as' => 'partner',
	'uses' => 'HomeController@Partner'
));

Route::get('/uclani-se', array(
	'as' => 'clanstvo',
	'uses' => 'HomeController@Clanstvo'
));