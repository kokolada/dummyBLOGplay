	<?php

class AdminController extends BaseController {

	public function adminGET(){
		return View::make('login');
	}

	public function adminPOST(){
		if(Auth::attempt(['username' => 'admin', 'password' => Input::get('c')]))
			return Redirect::route('adminPanel');
	}

	public function homeGET(){
		$clanci = Post::select('id', 'title')->get();
		return View::make('admin.adminhome', compact('clanci'));
	}

	public function homePOST(){
		return 0;
	}

	public function writeBlogPost(){
		$markdown = DB::table('markdownposts')->where('id', 21)->pluck('content');
		
		return View::make('admin.newblogpost', compact('markdown'));
	}

	public function writeJournalPost(){
		return View::make('admin.newjournalpost');
	}

	public function saveBlogPost(){
		DB::table('markdownposts')->where('id', 21)->update(['content'=>Input::get('markdownTextArticle')]);
		$markdown = DB::table('markdownposts')->where('id', 21)->pluck('content');
		
		return View::make('admin.newblogpost', compact('markdown'));
	}

	public function submitBlogPost(){
		DB::table('markdownposts')->where('id', 21)->update(['content'=>Input::get('markdownTextArticle')]);
		$markdown = DB::table('markdownposts')->where('id', 21)->pluck('content');

		if(Input::has('naslov')){
			$clanakHTML = Markdown::string($markdown);
			Post::create(['title' => Input::get('naslov'), 'content' => $clanakHTML, 'type' => 1]);
			DB::table('markdownposts')->where('id', 21)->update(['content'=>'', 'title' => '']);
			return Redirect::route('home');
		}
		return View::make('admin.newblogpost', compact('markdown'));
	}

	public function handleBlogPost(){
		if(Input::has('1'))
			return $this->saveBlogPost();
		else
			return $this->submitBlogPost();
	}

	public function submitJournalPost(){
		DB::table('markdownposts')->where('id', 22)->update(['content'=>Input::get('markdownTextArticle')]);
		$markdown = DB::table('markdownposts')->orderBy('id', 'desc')->pluck('content');
		if(Input::has('naslov')){
			$clanakHTML = Markdown::string($markdown);
			BlogPost::create(['title' => Input::get('naslov'), 'content' => $clanakHTML]);
			return Redirect::route('home');
		}
		return View::make('admin.newjournalpost', compact('markdown'));
	}

	public function editAboutMe(){
		$markdown = DB::table('aboutme')->where('id', 1)->pluck('content');

		return View::make('admin.editaboutme', compact('markdown'));
	}

	public function submitAboutMe(){
		$aboutme = Markdown::string(Input::get('markdownTextArticle'));
		DB::table('aboutme')->where('id', 1)->update(['content' => $aboutme]);
		return Redirect::route('about');
	}

	public function logout(){
		Auth::logout();
		return Redirect::route('home');
	}

	public function editClanak($id){
		return 0;
	}

	public function deleteClanak($id){
		Post::destroy($id);
		return Redirect::route('adminPanel');
	}
}
