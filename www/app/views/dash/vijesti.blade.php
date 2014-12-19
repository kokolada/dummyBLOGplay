@extends('layout.master')

@section('content')
@include('layout.dashbar')

@foreach($vijesti as $v)
	<h3>{{$v->naslov}}</h3>
	<img src="{{$v->slika}}">
	<p>{{$v->sadrzaj}}</p>
	<a href="{{route('vijestidashObrisi', $v->id)}}">obrisi</a>
	<a href="{{route('vijestidashEdit', $v->id)}}">uredi</a>
@endforeach

@stop