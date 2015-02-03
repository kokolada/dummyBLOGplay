<?php

class BlogController extends BaseController {

	public function clanakGET($id){
		$clanak = BlogPost::find($id);
		return View::make('clanak', compact('clanak'));
	}

}
