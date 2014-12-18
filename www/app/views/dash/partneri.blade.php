@extends('layout.master')

@section('content')
@include('layout.dashbar')

{{Form::open(array('files' => true))}}

<h3>Gold partneri</h3>
@foreach($partneri['gold'] as $g)
	<h3>{{$g->naziv}}</h3>
	<a href="{{$g->sajt}}">{{$g->sajt}}</a>
	<img src="{{$g->slika}}">
	<p>{{$g->opartneru}}</p>
	<a href="{{route('partneridashObrisi', $g->id)}}">obrisi</a>
@endforeach

<h3>Maxi partneri</h3>
@foreach($partneri['maxi'] as $mx)
	<h3>{{$mx->naziv}}</h3>
	<a href="{{$mx->sajt}}">{{$mx->sajt}}</a>
	<img src="{{$mx->slika}}">
	<p>{{$mx->opartneru}}</p>
	<a href="{{route('partneridashObrisi', $mx->id)}}">obrisi</a>
@endforeach

<h3>Midi partneri</h3>
@foreach($partneri['midi'] as $md)
	<h3>{{$md->naziv}}</h3>
	<a href="{{$md->sajt}}">{{$md->sajt}}</a>
	<img src="{{$md->slika}}">
	<p>{{$md->opartneru}}</p>
	<a href="{{route('partneridashObrisi', $md->id)}}">obrisi</a>
@endforeach

<h3>Mini partneri</h3>
@foreach($partneri['mini'] as $mn)
	<h3>{{$mn->naziv}}</h3>	
	<a href="{{$mn->sajt}}">{{$mn->sajt}}</a>
	<img src="{{$mn->slika}}">
	<p>{{$mn->opartneru}}</p>
	<a href="{{route('partneridashObrisi', $mn->id)}}">obrisi</a>
@endforeach

{{Form::text('naziv', null, ['placeholder' => 'naziv'])}} <br>
{{Form::text('sajt', null, ['placeholder' => 'web stranica'])}} <br>
{{Form::file('slika')}} <br>
{{Form::textarea('opartneru')}} <br>
{{Form::select('kategorija', array('1' => 'gold', '2' => 'maxi', '3' => 'midi', '4' => 'mini'))}}<br>
{{Form::submit('dodaj novog')}}

{{Form::close()}}

@stop