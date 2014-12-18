@extends('layout.master')

@section('content')
@include('layout.dashbar')

<section name="editsection">

{{Form::open(array('files' => true))}}

	Naslov: <input type="text" placeholder="naslov" name="naslov"> <br>
	Text: <textarea name="textarea" placeholder="sadrzaj" cols="30" rows="10"></textarea> <br>
	Slika: <input type="file" name="slika"> <br>
	<input type="submit" value="Dodaj vijest"> <br>

{{Form::close()}}

</section>
@stop