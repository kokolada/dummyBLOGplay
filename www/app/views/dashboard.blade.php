@extends('layout.master')

@section('content')
@include('layout.dashbar')

<section name="editsection">

{{Form::open(array('files' => true))}}

	{{Form::label('naslov', 'Naslov: ')}}
	{{Form::text('naslov', null, ['placeholder' => 'naslov'])}} <br>
	{{Form::label('textarea', 'Sadrzaj: ')}}
	{{Form::textarea('textarea', null, ['placeholder' => 'sadrzaj'])}} <br>
	{{Form::label('slika', 'Slika: ')}}
	{{Form::file('slika')}} <br>
	{{Form::submit('Dodaj vijest')}} <br>

{{Form::close()}}

<!-- $("textarea").jqte(); -->

</section>
@stop