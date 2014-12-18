<?php 

class AdminController extends BaseController {

	public function Dashboard(){

		return View::make('dashboard');
	}

	public function Vijesti(){
		$vijesti = Vijest::all();
		return View::make('dash.vijesti', compact('vijesti'));
	}

	public function Logo(){
		$logo = DB::table('logo')->orderBy('id', 'desc')->pluck('link');
		return View::make('dash.logo', compact('logo'));
	}

	public function BanerVeliki(){
		$baner = DB::table('baneri')->where('tip', 1)->orderBy('id', 'desc')->pluck('slika');
		return View::make('dash.velikibaner', compact('baner'));
	}

	public function BanerMali(){
		$baner = DB::table('baneri')->where('tip', 2)->orderBy('id', 'desc')->pluck('slika');
		return View::make('dash.malibaner', compact('baner'));
	}

	public function Reklame(){

		return View::make('dash.reklame');
	}

	public function Partneri(){

		return View::make('dash.partneri');
	}



	public function Login(){
		if(Auth::check())
			return Redirect::route('dashboard');

		return View::make('login');
	}

	public function LoginPOST(){
		$login = Auth::attempt(array(
			'korisnickoime' => Input::get('username'),
			'password' => Input::get('password')
		));

		if($login){

			return Redirect::intended('dashboard');
		}

		return Redirect::route('login');
	}

	public function Logout(){

		Auth::logout();
		return Redirect::route('home');
	}

}