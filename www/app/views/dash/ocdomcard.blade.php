@extends('layout.master')

@section('content')
@include('layout.dashbar')

{{Form::open(array('files' => true))}}

@if(isset($ocdomcard))
	<img src="{{$ocdomcard->slika}}">
	<p>{{$ocdomcard->opis}}</p>	
@endif

{{Form::file('slika')}}
{{Form::textarea('ocdom',null,['placeholder' => 'o cdom card'])}} <br>
{{Form::submit('sacuvaj')}}

{{Form::close()}}

@stop