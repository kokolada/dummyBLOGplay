@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin">		
	<div class="col-md-6 col-md-offset-1">		

		<h2 class="page-header">Uredi informacije o CDOM Card</h2>
			{{Form::open(array('files' => true))}}

			@if(isset($ocdomcard))
				<img src="{{$ocdomcard->slika}}" class="img-resposive  img-thumbnail slika">
			@endif

			{{Form::file('slika',['class' => 'btn btn-default btn-sm'])}}
			{{Form::textarea('ocdom',$ocdomcard->opis,['placeholder' => 'o cdom card'])}} <br>
			<hr>
			{{Form::submit('Sačuvaj',['class' => 'btn btn-primary pull-right'])}}
			{{Form::hidden('stariurl', $ocdomcard->slika)}}

			{{Form::close()}}
	</div>
</div>
@stop