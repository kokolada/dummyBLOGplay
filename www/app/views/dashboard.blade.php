@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin">	
	
	<div class="col-md-6 col-md-offset-1">		

		<h2 class="page-header">Dodaj novu vijest</h2>
		@include('DashboardStuff/NovaVijest') 
	</div>

</div>

@stop
