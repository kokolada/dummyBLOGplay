@extends('layout.master')

@section('content')
@include('layout.dashbar')

{{Form::open(array('files' => true))}}

@if(isset($ocdomcard))
	<img src="{{$ocdomcard->slika}}">
@endif

{{Form::file('slika')}}
{{Form::textarea('ocdom',$ocdomcard->opis,['placeholder' => 'o cdom card'])}} <br>
{{Form::submit('sacuvaj')}}
{{Form::hidden('stariurl', $ocdomcard->slika)}}

{{Form::close()}}

@stop