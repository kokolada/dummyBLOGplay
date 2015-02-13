<?php 

Route::get('/', array(
	'as' => 'home',
	'uses' => 'HomeController@home'
));

Route::get('/blog', array(
	'as' => 'blog',
	'uses' => 'HomeController@blog'
));

Route::get('/journal', array(
	'as' => 'journal',
	'uses' => 'HomeController@journal'
));

Route::get('/both', array(
	'as' => 'both',
	'uses' => 'HomeController@both'
));

Route::get('/about', array(
	'as' => 'about',
	'uses' => 'HomeController@about'
));

Route::get('/books', array(
	'as' => 'books',
	'uses' => 'HomeController@books'
));