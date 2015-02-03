<?php

class AdminController extends BaseController {

	public function homeGET(){
		$clanci = BlogPost::select('id', 'title')->get();
		return View::make('admin.apanelHome', compact('clanci'));
	}

	public function homePOST(){
		return 0;
	}

	public function writeGET(){
		return View::make('admin.writePost');
	}

	public function writePOST(){
		DB::table('markdownposts')->where('id', 21)->update(['content'=>Input::get('markdownTextArticle')]);
		$markdown = DB::table('markdownposts')->orderBy('id', 'desc')->pluck('content');
		if(Input::has('naslov')){
			$clanakHTML = Markdown::string($markdown);
			BlogPost::create(['title' => Input::get('naslov'), 'content' => $clanakHTML]);
			return Redirect::route('home');
		}
		return View::make('admin.writePost', compact('markdown'));
	}

	public function logout(){
		Auth::logout();
		return Redirect::route('home');
	}

	public function editClanak(){
		return 0;
	}
}
