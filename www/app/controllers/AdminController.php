<?php 

class AdminController extends BaseController {

	public function Dashboard(){

		return View::make('dashboard');
	}

	public function DashboardPOST(){
		Input::file('slika')!=null ? $url = Image::upload($_FILES['slika']) : $url = null;
		
		Vijest::create(array(
			'naslov' => Input::get('naslov'),
			'sadrzaj' => Input::get('textarea'),
			'slika' => $url,
			'korisnik_id' => Auth::user()->id
		));

		return View::make('dashboard');
	}

	public function Vijesti(){
		$vijesti = Vijest::all();
		return View::make('dash.vijesti', compact('vijesti'));
	}

	public function VijestiObrisi($id){
		Vijest::destroy($id);
		return Redirect::route('vijestidash');
	}

	public function VijestiEdit($id){
		$vijest = Vijest::find($id);
		return View::make('dash.vijestiEdit', compact('vijest'));
	}

	public function VijestiEditPOST($id){
		$vijest = Vijest::find($id);	

		if(Input::file('slika')!=null){
			$url = Image::upload($_FILES['slika']);
			$vijest->slika = $url;
		}
		
		$vijest->naslov = Input::get('naslov');
		$vijest->sadrzaj = Input::get('sadrzaj');

		$vijest->save();

		return Redirect::route('vijestidash');
	}

	public function Logo(){
		$logo = DB::table('logo')->orderBy('id', 'desc')->first();
		return View::make('dash.logo', compact('logo'));
	}

	public function LogoPOST(){
		$url = Image::upload($_FILES['slika']);
		DB::table('logo')->insert(array('link' => $url));

		return $this->Logo();
	}

	public function oCdomCard(){
		$ocdomcard = DB::table('ocdomcard')->orderBy('id', 'desc')->first();
		return View::make('dash.ocdomcard', compact('ocdomcard'));
	}

	public function oCdomCardPOST(){
		$url = Image::upload($_FILES['slika']);
		DB::table('ocdomcard')->insert(array('opis' => Input::get('ocdom'), 'slika' => $url));
		return $this->oCdomCard();
	}

	public function BanerVeliki(){
		$baner = DB::table('baneri')->where('tip', 1)->orderBy('id', 'desc')->pluck('slika');
		return View::make('dash.velikibaner', compact('baner'));
	}

	public function BanerVelikiPOST(){
		$url = Image::upload($_FILES['slika']);
		DB::table('baneri')->insert(array('tip' => 1, 'slika' => $url));

		return $this->BanerVeliki();
	}

	public function BanerMali(){
		$baner = DB::table('baneri')->where('tip', 2)->orderBy('id', 'desc')->pluck('slika');
		return View::make('dash.malibaner', compact('baner'));
	}

	public function BanerMaliPOST(){
		$url = Image::upload($_FILES['slika']);
		DB::table('baneri')->insert(array('tip' => 2, 'slika' => $url));

		return $this->BanerMali();
	}

	public function Reklame(){
		$reklame1 = DB::table('reklame')->where('broj', 1)->get();
		$reklame2 = DB::table('reklame')->where('broj', 2)->get();
		$reklame3 = DB::table('reklame')->where('broj', 3)->get();
		$reklame = array('reklame1' => $reklame1, 'reklame2' => $reklame2, 'reklame3' => $reklame3);

		return View::make('dash.reklame', compact('reklame'));
	}

	public function ReklamePOST(){
		$url = Image::upload($_FILES['slika']);
		DB::table('reklame')->insert(array('broj' => Input::get('kategorija'), 'slika' => $url));

		return $this->Reklame();
	}

	public function ReklameObrisi($id){
		DB::table('reklame')->where('id', $id)->delete();
		return Redirect::route('reklamedash');
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

		return View::make('dash.partneri', compact('partneri'));
	}

	public function PartneriPOST(){
		$url = Image::upload($_FILES['slika']);
		DB::table('partneri')->insert(array(
			'naziv' => Input::get('naziv'),
			'sajt' => Input::get('sajt'),
			'slika' => $url,
			'opartneru' => Input::get('opartneru'),
			'grupa' => Input::get('kategorija')
		));	

		return $this->Partneri();
	}

	public function PartneriObrisi($id){
		DB::table('partneri')->where('id', $id)->delete();

		return Redirect::route('partneridash');
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