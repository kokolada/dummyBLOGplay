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

//POST COMMANDS // WRITE BLOG; JOURNAL; EDIT ABOUT ME; BOOKSTOREAD

//WRITE BLOG
Route::get('/write/blog-post', array(
	'as' => 'writeBlogPost',
	'uses' => 'AdminController@writeBlogPost'
))->before('auth');

Route::post('/write/blog-post', array(
	'uses' => 'AdminController@handleBlogPost'
));

//WRITE JOURNAL
Route::get('/write/journal-post', array(
	'as' => 'writeJournalPost',
	'uses' => 'AdminController@writeJournalPost'
))->before('auth');

Route::post('/write/journal-post', array(
	'uses' => 'AdminController@submitJournalPost'
));

//EDIT ABOUT ME
Route::get('/about-me/edit',array(
	'as' => 'editAboutMe',
	'uses' => 'AdminController@editAboutMe'
));

Route::post('/about-me/edit',array(
	'uses' => 'AdminController@submitAboutMe'
));

//EDIT BOOKSTOREAD
//--IMPLEMENT HERE

//OVAJ EDIT REFACTORAT
Route::get('/edit/{id}', array(
	'as' => 'edit',
	'uses' => 'AdminController@editClanak'
))->before('auth');

Route::get('/delete/{id}', array(
	'as' => 'delete',
	'uses' => 'AdminController@deleteClanak'
))->before('auth');


Route::get('/logout', array(
	'as' => 'logout',
	'uses' => 'AdminController@logout'
))->before('auth');