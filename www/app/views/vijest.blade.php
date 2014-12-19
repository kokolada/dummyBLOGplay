@extends('layout.master')

@section('content')

	<h1>{{$vijest->naslov}}</h1>
	<img src="$vijest->slika">
	<p>{{$vijest->sadrzaj}}</p>

@stop