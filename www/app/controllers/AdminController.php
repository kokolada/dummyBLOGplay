<?php 

class AdminController extends BaseController {

	public function Dashboard(){

		return View::make('dashboard');
	}

	public function Vijesti(){

		return View::make('dash.vijesti');
	}

	public function Logo(){

		return View::make('dash.logo');
	}

	public function BanerVeliki(){

		return View::make('dash.velikibaner');
	}

	public function BanerMali(){

		return View::make('dash.malibaner');
	}

	public function Reklame(){

		return View::make('dash.reklame');
	}

	public function Partneri(){

		return View::make('dash.partneri');
	}



	public function Login(){

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