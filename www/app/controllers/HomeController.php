<?php

class HomeController extends BaseController {

	public function Home(){
		$banerv = DB::table('baneri')->where('tip', 1)->orderBy('id', 'desc')->pluck('slika');
		$banerm = DB::table('baneri')->where('tip', 2)->orderBy('id', 'desc')->pluck('slika');
		$logo = DB::table('logo')->orderBy('id', 'desc')->pluck('link');
		$reklame1 = DB::table('reklame')->where('broj', 1)->get();
		$reklame2 = DB::table('reklame')->where('broj', 2)->get();
		$reklame3 = DB::table('reklame')->where('broj', 3)->get();
		$reklame = array('reklame1' => $reklame1, 'reklame2' => $reklame2, 'reklame3' => $reklame3);
		$vijesti = Vijest::all();
		$home = array(
			'banerv' => $banerv,
			'banerm' => $banerm,
			'logo' => $logo,
			'reklame' => $reklame,
			'vijesti' => $vijesti
		);

		return View::make('home', compact('home'));
	}

	public function Vijest($id){
		$vijest = Vijest::find($id);
		return View::make('vijest', compact('vijest'));
	}

	public function Partneri(){
		$gold = DB::table('partneri')->where('grupa', 1)->get();
		$maxi = DB::table('partneri')->where('grupa', 2)->get();
		$midi = DB::table('partneri')->where('grupa', 3)->get();
		$mini = DB::table('partneri')->where('grupa', 4)->get();
		$partneri = array(
			'gold' => $gold,
			'maxi' => $maxi,
			'midi' => $midi,
			'mini' => $mini
		);
		return View::make('partneri', compact('partneri'));
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
		$ocdom = DB::table('ocdomcard')->orderBy('id', 'desc')->first();
		return View::make('oCdom', compact('ocdom'));
	}
}
