@extends('layout.master')

@section('content')

<div class="row">
	<div class="col s12">
		<h1 style="font-weight: 600;" >About Tonka</h1>
	</div>
</div>

<div class="row">
	@include('sidebar.sidebar')
    @include('mainbar.mainbar')
</div>

@stop