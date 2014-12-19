@extends('layout.master')

@section('content')


<div class="container">	

	@include('layout.dashbar')	
	
	<div class="col-md-6 col-md-offset-3" id="dash">		

	{{Form::model($vijest, array(
			'route' => array('vijestidashEdit', $vijest->id),
			'files' => true
	))}}

		{{Form::label('naslov', 'Naslov:')}}
		{{Form::text('naslov', ['class' => 'form-control'])}}
		
		{{Form::label('sadrzaj', 'Sadržaj:')}}
		{{Form::textarea('sadrzaj',['class' => 'form-control'])}}

		{{Form::label('slika', 'Slika:')}}
		{{Form::file('slika',['class' => 'btn btn-default btn-sm'])}}
		<hr>
		{{Form::submit('Sačuvaj',['class' => 'btn btn-primary pull-right'])}}

	{{Form::close()}}

	</div> <!-- col-md-10 col-md-offset-2 -->
</div> <!-- .container -->

@stop



