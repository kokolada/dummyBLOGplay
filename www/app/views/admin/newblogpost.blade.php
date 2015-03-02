@extends('layout.adminmaster')

@section('content')

{{Form::open()}}
@include('components.editor')

<input class="bezmargine six columns"  type="text" name="naslov" placeholder="naslov" style="margin:0 auto;">
<input class="bezmargine" type="submit" style="float:left;" value="Sačuvaj promjene" name="1">
<input class="bezmargine" type="submit" style="float:right;" value="Objavi blog post">

{{Form::close()}}
@stop