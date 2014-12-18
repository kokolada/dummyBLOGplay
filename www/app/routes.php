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

    Route::post('/dashboard', array(
        'as' => 'dashboardPOST',
        'uses' => 'AdminController@DashboardPOST'
    ));

    Route::get('/dashboard/vijesti', array(
    	'as' => 'vijestidash',
    	'uses' => 'AdminController@Vijesti'
    ));

    Route::get('/dashboard/logo', array(
    	'as' => 'logodash',
    	'uses' => 'AdminController@Logo'
    ));

    Route::get('/dashboard/baner-veliki', array(
    	'as' => 'banervelikidash',
    	'uses' => 'AdminController@BanerVeliki'
    ));

    Route::get('/dashboard/baner-mali', array(
    	'as' => 'banermalidash',
    	'uses' => 'AdminController@BanerMali'
    ));

    Route::get('/dashboard/reklame', array(
    	'as' => 'reklamedash',
    	'uses' => 'AdminController@Reklame'
    ));

    Route::get('/dashboard/partneri', array(
    	'as' => 'partneridash',
    	'uses' => 'AdminController@Partneri'
    ));

    /*** OVDE ZAVRSAVAJU RUTE ZA SIDEBAR LINKOVE(DASHBOARD) ***/
    //========================================================//
    Route::get('/logout', array(
        'as' => 'logout',
        'uses' => 'AdminController@Logout'
    ));
});
