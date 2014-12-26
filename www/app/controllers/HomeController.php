<?php

class HomeController extends BaseController {

	public function Home(){
		$banerv = DB::table('baneri')->where('tip', 1)->orderBy('id', 'desc')->get();
		$banerm = DB::table('baneri')->where('tip', 2)->orderBy('id', 'desc')->pluck('slika');
		$logo = DB::table('logo')->orderBy('id', 'desc')->pluck('link');
		$reklame1 = DB::table('reklame')->where('broj', 1)->get();
		$reklame2 = DB::table('reklame')->where('broj', 2)->get();
		$reklame3 = DB::table('reklame')->where('broj', 3)->get();
		$reklame = array('reklame1' => $reklame1, 'reklame2' => $reklame2, 'reklame3' => $reklame3);
		$vijesti = Vijest::orderBy('id', 'desc')->paginate(6);
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
		$banerv = DB::table('baneri')->where('tip', 1)->orderBy('id', 'desc')->pluck('slika');
		$banerm = DB::table('baneri')->where('tip', 2)->orderBy('id', 'desc')->pluck('slika');
		$logo = DB::table('logo')->orderBy('id', 'desc')->pluck('link');
		$reklame1 = DB::table('reklame')->where('broj', 1)->get();
		$reklame2 = DB::table('reklame')->where('broj', 2)->get();
		$reklame3 = DB::table('reklame')->where('broj', 3)->get();
		$reklame = array('reklame1' => $reklame1, 'reklame2' => $reklame2, 'reklame3' => $reklame3);
		$vijesti = Vijest::orderBy('id', 'desc')->get();
		$home = array(
			'banerv' => $banerv,
			'banerm' => $banerm,
			'logo' => $logo,
			'reklame' => $reklame,
			'vijesti' => $vijesti
		);
		return View::make('vijest', compact(['vijest', 'home']));
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

	public function Partner($id){
		$partner = DB::table('partneri')->where('id', $id)->first();
		return View::make('partner', compact('partner'));
	}

	public function Clanstvo(){

		return View::make('clanstvo');
	}

	public function OnlineClanstvo(){

		return View::make('OnlineClanstvo');
	}

	public function OnlineClanstvoPOST(){
		$slika = Image::upload($_FILES['slika']);
		$uplatnica = Image::upload($_FILES['uplatnica']);
		Mail::send(
			'emails.mailview',
			array(
				'ime' => Input::get('Ime'),
				'prezime' => Input::get('Prezime'),
				'jmbg' => Input::get('JMBG'),
				'adresa' => Input::get('Adresa'),
				'datum' => Input::get('Datum'),
				'slika' => $slika,
				'uplatnica' => $uplatnica
			),
			function($message){
				$message->from('cdom.prijave@cdom.ba', 'CDOMPrijave');
    			$message->to('hilmija.arnautovic@gmail.com', 'CDOM')->subject('CDOM prijava');
		});
		return Redirect::route('home')->with('info', 'Vaša prijava je uspješno poslana.');
	}

	public function oCdom(){
		$ocdom = DB::table('ocdomcard')->orderBy('id', 'desc')->first();
		return View::make('oCdom', compact('ocdom'));
	}

	public function Kontakt(){
		$kontakt = DB::table('kontakt')->where('id', 1)->first();
		return View::make('kontakt', compact('kontakt'));
	}
}
