<?php

class Post extends Eloquent{

	protected $fillable = ['title', 'content', 'created_at', 'updated_at', 'type'];
	protected $table = 'blogPosts';

}
