@extends('layout.adminmaster')

@section('content')

{{Form::open()}}

@include('components.editor')
<input class="bezmargine" type="submit" style="float:left;" value="Sačuvaj promjene" name="1">

{{Form::close()}}

@stop