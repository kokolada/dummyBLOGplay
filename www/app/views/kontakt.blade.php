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
				<iframe  id="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d46035.04651157651!2d18.38392495!3d43.851881999999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4758cbb1ed719bd1%3A0x562ecda6de87b33e!2sSarajevo!5e0!3m2!1sen!2sba!4v1419167629278" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>

@stop

