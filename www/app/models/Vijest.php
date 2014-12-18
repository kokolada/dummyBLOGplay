<?php

class Vijest extends Eloquent {

	protected $fillable = array(
		'id', 
		'naslov', 
		'sadrzaj',  
		'slika',
		'korisnik_id'
	);

	protected $table = 'vijesti';

	public function autor(){
		return $this->belongsTo('User');
	}
}
