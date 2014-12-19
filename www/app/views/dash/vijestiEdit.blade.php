@extends('layout.master')

@section('content')
@include('layout.dashbar')

{{Form::model($vijest, array(
		'route' => array('vijestidashEdit', $vijest->id),
		'files' => true
))}}

{{Form::text('naslov')}}
{{Form::file('slika')}}
{{Form::textarea('sadrzaj')}}

{{Form::submit('Sacuvaj')}}

{{Form::close()}}

@stop