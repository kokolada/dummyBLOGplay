@extends('layout.master')

@section('content')

<div class="row">
	<div class="col s12">
		<h1 style="font-weight: 600; float:left;" ><span class="purple-text text-darken-3">Tonka</span> <span class="orange-text text-darken-4">Journal</span></h1>
	</div>
</div>

<div class="row">
	@include('sidebar.sidebar')
    @include('mainbar.mainbar')
</div>

@stop