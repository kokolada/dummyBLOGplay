@extends('layout.master')

@section('content')

<div class="container">
	<div class="col-md-10 col-md-offset-1">
		<h2>O CDOM</h2><hr>
		<div class="col-md-6">
			<img class="img-responsive" src="{{$ocdom->slika}}" alt="">
		</div>
		<p align="justify">{{$ocdom->opis}}</p>
		
	</div>
</div>

@stop