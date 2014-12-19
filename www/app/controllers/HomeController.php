<?php

class HomeController extends BaseController {

	public function Home(){
		
		return View::make('home');
	}

	public function Vijest($id){
		$vijest = Vijest::find($id);
		return View::make('vijest', compact('vijest'));
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

	public function OnlineClanstvo(){

		return View::make('OnlineClanstvo');
	}

	public function oCdom(){

		return View::make('oCdom');
	}
}
