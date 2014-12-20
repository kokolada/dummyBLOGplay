@extends('layout.master')

@section('content')


<div class="container">	

	@include('layout.dashbar')	
	
	<div class="col-md-6 col-md-offset-3" id="dash">
		
		
		{{Form::open(array('files' => true))}}
			<div id="izmjenaLoga">
				{{Form::file('slika')}}
				{{Form::label('email', 'Email: ')}}
				{{Form::text('email', $kontakt->email, ['placeholder' => 'email'])}} <br>
				{{Form::label('telefon', 'Telefon: ')}}
				{{Form::text('telefon', $kontakt->telefon, ['placeholder' => 'telefon'])}} <br>
				{{Form::label('adresa', 'Adresa: ')}}
				{{Form::text('adresa', $kontakt->adresa, ['placeholder' => 'adresa'])}}
				<hr>
				{{Form::submit('Sačuvaj', ['class' => 'btn btn-primary pull-right'])}}
				{{Form::hidden('stariurl', $kontakt->slika)}}
			</div>
		{{Form::close()}}
		 
	</div>

</div>


@stop