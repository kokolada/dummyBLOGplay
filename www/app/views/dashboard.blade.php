@extends('layout.master')

@section('content')
@include('layout.dashbar')

<link rel="stylesheet" type="text/css" href="/text_editor_plugin/jquery-te-1.4.0.css">
<link rel="stylesheet" type="text/css" href="/text_editor_plugin/jqtecustom.css">
<script type="text/javascript" src="/text_editor_plugin/jquery-te-1.4.0.min.js"></script>
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

</section>


<script type="text/javascript">
	$(document).ready(function() {
    	$("textarea").jqte();
	});
</script>

@stop