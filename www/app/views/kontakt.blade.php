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
				<iframe  id="mapa" src="https://www.google.com/maps/embed?pb=!1m22!1m12!1m3!1d1438.4136295077308!2d18.424660299400884!3d43.85940892818748!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m7!1i0!3e6!4m0!4m3!3m2!1d43.859468899999996!2d18.4236303!5e0!3m2!1sen!2sus!4v1419499917751" frameborder="0"></iframe>
			</div>
		</div>
	</div>
</div>

@stop

