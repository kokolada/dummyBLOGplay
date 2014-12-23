@extends('layout.dMaster')
@section('content')

@include('layout.dashbar')	

<div class="container containerMargin" name="nvijest">	
	<div class="col-md-9 col-md-offset-1">	
	@if(isset($info))
		<div class="alert alert-success">{{$info}}</div>
	@endif	

		<h2 class="page-header"><i class="fa fa-fw fa-plus"></i> Dodaj novu vijest</h2>
		@include('DashboardStuff/NovaVijest') 
	</div>

</div>

@stop
