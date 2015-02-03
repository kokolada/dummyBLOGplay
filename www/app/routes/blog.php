<?php 

Route::get('/blog', array(
	'as' => 'blog',
	'uses' => 'HomeController@blogGET'
));

Route::get('/article/{id}', array(
	'as' => 'clanak',
	'uses' => 'BlogController@clanakGET'
));