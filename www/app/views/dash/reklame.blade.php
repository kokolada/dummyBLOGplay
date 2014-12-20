@extends('layout.master')

@section('content')
@include('layout.dashbar')

<div id="rekl">
{{Form::open(array('files' => true))}}
<h3>reklame pool 1</h3>
@foreach($reklame['reklame1'] as $r1)
	<img src="{{$r1->slika}}">
	<a href="{{route('reklamedashObrisi', $r1->id)}}">obrisi</a>
@endforeach

<h3>reklame pool 2</h3>
@foreach($reklame['reklame2'] as $r2)
	<img src="{{$r2->slika}}">
	<a href="{{route('reklamedashObrisi', $r2->id)}}">obrisi</a>
@endforeach

<h3>reklame pool 3</h3>
@foreach($reklame['reklame3'] as $r3)
	<img src="{{$r3->slika}}">
	<a href="{{route('reklamedashObrisi', $r3->id)}}">obrisi</a>
@endforeach

<br>
{{Form::file('slika')}} <br>
{{Form::select('kategorija', array('1' => 'pool1', '2' => 'pool2', '3' => 'pool3'))}} <br>
{{Form::submit('dodaj novu')}}

{{Form::close()}}
</div>
@stop