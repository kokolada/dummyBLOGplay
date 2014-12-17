<?php

class HomeController extends BaseController {

	public function Home(){
		
		return View::make('home');
	}


	public function Partneri(){

		return View::make('partneri');
	}

	public function Partner(){

		return View::make('parner');
	}

	public function Clanstvo(){

		return View::make('clanstvo');
	}
}
