<?php 

class AkcijeController extends BaseController{

	public function upload(){
		$url = Image::upload($_FILES['image']);
		return View::make('upload')->with('url', $url);
	}

}