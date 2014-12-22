@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="banerm">	
	
	<div class="col-md-6 col-md-offset-1">		

		<h2 class="page-header"><i class="fa fa-fw fa-pencil"></i> Uredi mali baner</h2>		
		<img src="{{$baner}}" class="img-responsive imageBanner img-thumbnail">
		
		{{Form::open(array('files' => true))}}
			<div id="izmjenaLoga">
				{{Form::label('slika', 'Promijeni baner 2:')}}
				{{Form::file('slika', ['class' => 'btn btn-default btn-sm', 'required' => 'required'])}}
				<hr>
				{{Form::submit('Sačuvaj', ['class' => 'btn btn-primary pull-right'])}}
			</div>
		{{Form::close()}}
		 
	</div>

</div>

@stop










