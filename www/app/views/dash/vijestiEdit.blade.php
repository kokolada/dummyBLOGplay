@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin">	
	
	<div class="col-md-9 col-md-offset-1">		

		<h2 class="page-header"><i class="fa fa-fw fa-pencil"></i> Uredi vijest</h2>		

	{{Form::model($vijest, array(
			'route' => array('vijestidashEdit', $vijest->id),
			'files' => true
	))}}

		{{Form::label('naslov', 'Naslov:')}}
		{{Form::text('naslov', null, ['class' => 'form-control'])}}
		
		{{Form::label('sadrzaj', 'Sadržaj:')}}
		{{Form::textarea('sadrzaj', null, ['class' => 'form-control'])}}

		{{Form::label('slika', 'Slika:')}}
		{{Form::file('slika',['class' => 'btn btn-default btn-sm'])}}
		<hr>
		{{Form::submit('Sačuvaj',['class' => 'btn btn-primary pull-right'])}}

	{{Form::close()}}

	</div> <!-- col-md-10 col-md-offset-2 -->
</div> <!-- .container -->

@stop



