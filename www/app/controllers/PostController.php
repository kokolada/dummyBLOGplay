<?php

class PostController extends BaseController {

	public function getPostById($id){
		$post = Post::find($id);
		return View::make('postPAGE', compact('post'));
	}

}
