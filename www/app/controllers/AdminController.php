<?php 

class AdminController extends BaseController {

	public function Dashboard(){

		return View::make('dashboard');
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