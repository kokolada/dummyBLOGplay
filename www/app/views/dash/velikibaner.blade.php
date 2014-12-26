@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="banerv">	
	
	<div class="col-md-6 col-md-offset-1">		

		<h2 class="page-header"><i class="fa fa-fw fa-pencil"></i> Uredi veliki baner</h2>		

		@foreach($baner as $b)
		<img src="{{$b->slika}}" class="img-responsive imageBanner img-thumbnail">
		<a class="btn btn-default btn-xs odmakni" href="{{route('banervelikidelete', $b->id)}}"><i class="fa fa-fw fa-trash"></i>Obriši</a>
		@endforeach
		 
		 {{Form::open(array('files' => true))}}
			<div  id="izmjenaLoga">
				{{Form::label('slika', 'Dodaj veliki baner:')}}
				<span> <small>(Preporuka: 1120x250)</small></span>
				{{Form::file('slika', ['class' => 'btn btn-default btn-sm','required' => 'required'])}}
				<hr>
				{{Form::submit('Sačuvaj', ['class' => 'btn btn-primary pull-right'])}}
			</div>
		{{Form::close()}}

	</div>

</div>

@stop


