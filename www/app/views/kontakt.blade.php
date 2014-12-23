@extends('layout.master')

@section('content')

<div class="container" name="kontakt">
	<div class="col-md-8 col-md-offset-2" >
		<h1 class="page-header"><i class="fa fa-fw fa-user"></i> Kontakt</h1>
		<div class="col-md-10 col-md-offset-1">		 	
			<h4>
				<div class="kontaktInfo">
					<i class="fa fa-fw fa-at"></i> 
					{{$kontakt->email}}
				</div>
			</h4>
			<h4>
				<div class="kontaktInfo">
					<i class="fa fa-fw fa-phone"></i>
					{{$kontakt->telefon}}
				</div>
			</h4>	
			
			<div class="kontaktMapa">					
				<p><i class="fa fa-fw fa-location-arrow"></i> {{$kontakt->adresa}}</p>
				<iframe  id="mapa" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2876.8154150230826!2d18.427449199999998!3d43.8596544!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758c8cf2e07439d%3A0x3079eddd48a51231!2sMula+Mustafe+Ba%C5%A1eskije%2C+Sarajevo%2C+Bosnia+and+Herzegovina!5e0!3m2!1sen!2s!4v1419350932563" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>

@stop

