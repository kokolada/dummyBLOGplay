<?php

Route::get('/',array(
	'as' => 'home',
	'uses' => 'HomeController@Home'
));

Route::get('/vijest/{id}',array(
    'as' => 'vijest',
    'uses' => 'HomeController@Vijest'
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

Route::get('/kontakt', array(
    'as' => 'kontakt',
    'uses' => 'HomeController@Kontakt'
));

Route::get('/dl', array(
    'as' => 'dl',
    'uses' => 'AkcijeController@dl'
));

/*HARUN KELJAO, ISPRAVI*/
Route::get('/onlineClanstvo', array(
    'as' => 'onlineclanstvo',
    'uses' => 'HomeController@OnlineClanstvo'
));

Route::get('/o-cdom', array(
    'as' => 'o-cdom',
    'uses' => 'HomeController@oCdom'
));

/*DOVDJE SAM KELJAO*/

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

    Route::get('/dashboard/vijesti/{id}', array(
        'as' => 'vijestidashObrisi',
        'uses' => 'AdminController@VijestiObrisi'
    ));

    Route::get('/dashboard/vijesti/{id}/edit', array(
        'as' => 'vijestidashEdit',
        'uses' => 'AdminController@VijestiEdit'
    ));

    Route::post('/dashboard/vijesti/{id}/edit', array(
        'as' => 'vijestidashEditPOST',
        'uses' => 'AdminController@VijestiEditPOST'
    ));

    Route::get('/dashboard/logo', array(
    	'as' => 'logodash',
    	'uses' => 'AdminController@Logo'
    ));

    Route::post('/dashboard/logo', array(
        'uses' => 'AdminController@LogoPOST'
    ));

    Route::get('/dashboard/o-cdom-card', array(
        'as' => 'ocdomdash',
        'uses' => 'AdminController@OCdomCard'
    ));

    Route::post('/dashboard/o-cdom-card', array(
        'uses' => 'AdminController@OCdomCardPOST'
    ));

    Route::get('/dashboard/baner-veliki', array(
    	'as' => 'banervelikidash',
    	'uses' => 'AdminController@BanerVeliki'
    ));

    Route::post('/dashboard/baner-veliki', array(
        'uses' => 'AdminController@BanerVelikiPOST'
    ));

    Route::get('/dashboard/baner-mali', array(
    	'as' => 'banermalidash',
    	'uses' => 'AdminController@BanerMali'
    ));

    Route::post('/dashboard/baner-mali', array(
        'uses' => 'AdminController@BanerMaliPOST'
    ));

    Route::get('/dashboard/reklame', array(
    	'as' => 'reklamedash',
    	'uses' => 'AdminController@Reklame'
    ));

    Route::post('/dashboard/reklame', array(
        'uses' => 'AdminController@ReklamePOST'
    ));

    Route::get('/dashboard/reklame/{id}', array(
        'as' => 'reklamedashObrisi',
        'uses' => 'AdminController@ReklameObrisi'
    ));

    Route::get('/dashboard/partneri', array(
    	'as' => 'partneridash',
    	'uses' => 'AdminController@Partneri'
    ));

    Route::post('/dashboard/partneri', array(
        'uses' => 'AdminController@PartneriPOST'
    ));

    Route::get('/dashboard/partneri/{id}', array(
        'as' => 'partneridashObrisi',
        'uses' => 'AdminController@PartneriObrisi'
    ));

    Route::get('/dashboard/password', array(
        'as' => 'passworddash',
        'uses' => 'AdminController@Password'
    ));

    Route::post('/dashboard/password', array(
        'uses' => 'AdminController@PasswordPOST'
    ));

    Route::get('/dashboard/kontakt', array(
        'as' => 'kontaktdash',
        'uses' => 'AdminController@Kontakt'
    ));

    Route::post('/dashboard/kontakt', array(
        'uses' => 'AdminController@KontaktPOST'
    ));

    Route::get('/dashboard/pdf', array(
        'as' => 'pdfdash',
        'uses' => 'AdminController@Pdf'
    ));

    Route::post('/dashboard/pdf', array(
        'uses' => 'AdminController@PdfPOST'
    ));

    /*** OVDE ZAVRSAVAJU RUTE ZA SIDEBAR LINKOVE(DASHBOARD) ***/
    //========================================================//
    Route::get('/logout', array(
        'as' => 'logout',
        'uses' => 'AdminController@Logout'
    ));
});
