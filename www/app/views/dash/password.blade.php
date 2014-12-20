@extends('layout.master')

@section('content')


<div class="container">	

	@include('layout.dashbar')	
	
	<div class="col-md-6 col-md-offset-3" id="dash">
		

		{{Form::open()}}
			<div id="izmjenaLoga">
				{{Form::label('trenutniPW', 'Stari password: ')}}
				{{Form::text('trenutniPW')}} <br>
				{{Form::label('noviPW', 'Novi password: ')}}
				{{Form::text('noviPW')}}
				<hr>
				{{Form::submit('Sačuvaj', ['class' => 'btn btn-primary pull-right'])}}
			</div>
		{{Form::close()}}
		 
	</div>

</div>


@stop