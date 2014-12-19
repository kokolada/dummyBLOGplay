@extends('layout.master')

@section('content')


<div class="container">	

	@include('layout.dashbar')	
	
	<div class="col-md-6 col-md-offset-3" id="dash">		

		<img src="{{$baner}}" class="img-responsive imageBanner img-thumbnail">
		
		{{Form::open(array('files' => true))}}
			<div id="izmjenaLoga">
				{{Form::label('slika', 'Promijeni baner 2:')}}
				{{Form::file('slika', ['class' => 'btn btn-default btn-sm'])}}
				<hr>
				{{Form::submit('Sačuvaj', ['class' => 'btn btn-primary pull-right'])}}
			</div>
		{{Form::close()}}
		 
	</div>

</div>

@stop










