<?php

Route::get('/c', array(
	'as' => 'admin',
	'uses' => 'AdminController@adminGET'
))->before('guest');

Route::post('/c', array(
	'uses' => 'AdminController@adminPOST'
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