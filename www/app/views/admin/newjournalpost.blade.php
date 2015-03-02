@extends('layout.adminmaster')

@section('content')

{{Form::open()}}
@include('components.editor')

<input class="bezmargine six columns"  type="text" name="naslov" placeholder="naslov" style="margin:0 auto;">
<input class="bezmargine" type="submit" style="float:left;" value="Objavi journal post">

{{Form::close()}}
@stop