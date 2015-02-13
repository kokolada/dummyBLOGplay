<?php

Route::get('/blog/{id}', array(
	'as' => 'post',
	'uses' => 'PostController@getPostById'
));