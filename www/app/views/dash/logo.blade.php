@extends('layout.master')

@section('content')
@include('layout.dashbar')

<img src="{{$logo->link}}">

{{Form::open(array('files' => true))}}

{{Form::file('slika')}}
{{Form::submit('sacuvaj')}}

{{Form::close()}}

@stop