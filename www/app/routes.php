<?php

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

Route::get('/cdom', array(
	'as' => 'login',
	'uses' => 'AdminController@Login'
));

Route::post('/cdom', array(
	'uses' => 'AdminController@LoginPOST'
));

Route::group(array('before' => 'auth'), function()
{
    Route::get('/dashboard', array(
    	'as' => 'dashboard',
    	'uses' => 'AdminController@Dashboard'
    ));

    Route::get('/logout', array(
    	'as' => 'logout',
    	'uses' => 'AdminController@Logout'
    ));
});
