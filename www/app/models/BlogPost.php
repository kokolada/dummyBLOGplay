<?php

class BlogPost extends Eloquent{

	protected $fillable = ['title', 'content', 'created_at', 'updated_at'];
	protected $table = 'blogPosts';

}
