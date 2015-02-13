<?php

class Comment extends Eloquent{

	protected $fillable = ['posted_by', 'content', 'created_at', 'replied_to', 'post_id'];
	protected $table = 'comments';

}
