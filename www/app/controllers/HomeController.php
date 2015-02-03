<?php

class HomeController extends BaseController {

	public function adminGET(){
		return View::make('login');
	}

	public function adminPOST(){
		if(Auth::attempt(['username' => 'admin', 'password' => Input::get('c')]))
			return Redirect::route('adminPanel');
	}

	public function homeGET(){
		return Redirect::route('blog');
	}
	
	public function blogGET(){
		$clanci = BlogPost::orderBy('id', 'desc')->get();
		return View::make('blog',  compact('clanci'));
	}

	public function journalGET(){
		return View::make('journal');
	}

	public function aboutGET(){
		return View::make('about');
	}
}
