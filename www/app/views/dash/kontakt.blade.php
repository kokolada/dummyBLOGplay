@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="kontakt">		
	<div class="col-md-6 col-md-offset-1">		
		<h2 class="page-header"><i class="fa fa-fw fa-pencil"></i>  Uredi kontakt informacije</h2>
		{{Form::open(array('files' => true))}}
			<div id="izmjenaLoga">
				{{Form::label('email', 'Email: ')}}
				{{Form::text('email', $kontakt->email, ['placeholder' => 'email','class' => 'form-control','required' => 'required' ])}} <br>
				{{Form::label('telefon', 'Telefon: ')}}
				{{Form::text('telefon', $kontakt->telefon, ['placeholder' => 'telefon','class' => 'form-control','required' => 'required'])}} <br>
				{{Form::label('adresa', 'Adresa: ')}}
				{{Form::text('adresa', $kontakt->adresa, ['placeholder' => 'adresa','class' => 'form-control','required' => 'required'])}}
				<hr>
				{{Form::submit('Sačuvaj', ['class' => 'btn btn-primary pull-right'])}}
				{{Form::hidden('stariurl', $kontakt->slika)}}
			</div>
		{{Form::close()}}
		 
	</div>
</div>


@stop