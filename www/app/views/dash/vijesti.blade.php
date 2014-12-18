@extends('layout.master')

@section('content')
@include('layout.dashbar')

@foreach($vijesti as $v)
	<h3>{{$v->naslov}}</h3>
	<p>{{$v->sadrzaj}}</p>
	<button>obrisi</button>
	<button>uredi</button>
@endforeach

@stop