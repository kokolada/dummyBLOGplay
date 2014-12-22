@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="nvijest">	
	
	<div class="col-md-6 col-md-offset-1">		

		<h2 class="page-header"><i class="fa fa-fw fa-plus"></i> Dodaj novu vijest</h2>
		@include('DashboardStuff/NovaVijest') 
	</div>

</div>

@stop
