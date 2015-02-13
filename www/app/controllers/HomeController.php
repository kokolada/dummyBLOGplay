<?php

class HomeController extends BaseController {

	public function home(){
		return Redirect::route('blog');
	}
	
	public function blog(){
		$posts = Post::where('type', '1')->orderBy('id', 'desc')->get();
		return View::make('blog', compact('posts'));
	}

	public function journal(){
		$posts = Post::where('type', '0')->orderBy('id', 'desc')->get();
		return View::make('journal', compact('posts'));
	}

	public function both(){
		$posts = Post::orderBy('id', 'desc')->get();
		return View::make('blog', compact('posts'));
	}

	public function about(){
		$post = DB::table('aboutme')->first();
		return View::make('about', compact('post'));
	}

	public function books(){
		//	#to implement
		return Redirect::route('blog');
	}
}
