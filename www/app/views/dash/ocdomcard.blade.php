@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="ocdom">		
	<div class="col-md-6 col-md-offset-1">		

		<h2 class="page-header"><i class="fa fa-fw fa-pencil"></i> Uredi informacije o CDOM Card</h2>
			{{Form::open(array('files' => true))}}

			@if(isset($ocdomcard))
				<img src="{{$ocdomcard->slika}}" class="img-resposive  img-thumbnail slika">
			@endif
			<br>
			{{Form::label('slika', 'Promijeni sliku:')}}
			{{Form::file('slika',['class' => 'btn btn-default btn-sm'])}}
			<br>
			{{Form::label('ocdom', 'Promijeni text o CDOM Card:')}}
			{{Form::textarea('ocdom',$ocdomcard->opis,['placeholder' => 'o cdom card'])}} <br>
			<hr>
			{{Form::submit('Sačuvaj',['class' => 'btn btn-primary pull-right'])}}
			{{Form::hidden('stariurl', $ocdomcard->slika)}}

			{{Form::close()}}
	</div>
</div>
@stop