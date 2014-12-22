@extends('layout.master')

@section('content')

<div class="container" name="ocdom">
	<div class="col-md-10 col-md-offset-1">
		<h2><i class="fa fa-fw fa-credit-card"></i> O CDOM Card</h2><hr>
		<div class="col-md-6">
			<img class="img-responsive" src="{{$ocdom->slika}}" alt="">
		</div>
		<p align="justify">{{$ocdom->opis}}</p>
		
	</div>
</div>

@stop