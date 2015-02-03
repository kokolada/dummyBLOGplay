<?php 

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@homeGET'
));

Route::get('/journal', array(
	'as' => 'journal',
	'uses' => 'HomeController@journalGET'
));

Route::get('/about', array(
	'as' => 'about',
	'uses' => 'HomeController@aboutGET'
));

Route::get('/c', array(
	'as' => 'admin',
	'uses' => 'HomeController@adminGET'
))->before('guest');
Route::post('/c', array(
	'uses' => 'HomeController@adminPOST'
));

Route::get('/cp', array(
	'as' => 'adminPanel',
	'uses' => 'AdminController@homeGET'
))->before('auth');

Route::post('/cp', array(
	'uses' => 'AdminController@homePOST'
));

Route::get('/write', array(
	'as' => 'writePost',
	'uses' => 'AdminController@writeGET'
))->before('auth');

Route::post('/write', array(
	'uses' => 'AdminController@writePOST'
));

Route::get('/logout', array(
	'as' => 'logout',
	'uses' => 'AdminController@logout'
))->before('auth');

Route::get('/edit/{id}', array(
	'as' => 'edit',
	'uses' => 'AdminController@editClanak'
))->before('auth');