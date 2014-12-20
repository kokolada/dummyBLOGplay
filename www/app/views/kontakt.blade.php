@extends('layout.master')

@section('content')

<div class="container">
	<div class="col-md-10 col-md-offset-1">
		<h2>KONTAKT</h2><hr>
		<div class="col-md-6">
			<img class="img-responsive" src="{{$kontakt->slika}}" alt="">
		</div>
		<p align="justify">{{$kontakt->email}}</p>
		<p align="justify">{{$kontakt->telefon}}</p>
		<p align="justify">{{$kontakt->adresa}}</p>
		<h1>FALI JOS MAPA</h1>
	</div>
</div>

@stop