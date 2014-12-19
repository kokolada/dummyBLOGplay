@extends('layout.master')

@section('content')

<div class="container">	

	@include('layout.dashbar')	
	
	<div class="col-md-6 col-md-offset-3">
		@include('DashboardStuff/NovaVijest') 
	</div>

</div>

@stop
