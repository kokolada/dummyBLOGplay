@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin">	
	
	<div class="col-md-6 col-md-offset-1">		

		<h2 class="page-header">Vijesti</h2>		

	@foreach($vijesti as $v)
		<div class="vijesti razmakVijesti">
			<a href="#"><img class="slikaVijesti" src="{{$v->slika}}"></a>
			<div class="infoVijest">
				<a href="#" alt=""><h3 id="naslovVijesti">{{$v->naslov}}</h3></a>
				<p>{{$v->sadrzaj}}</p>
			</div>
			<p>
				<a href="{{route('vijestidashObrisi', $v->id)}}" class="btn btn-default btn-xs">Obriši</a> 
				<a href="{{route('vijestidashEdit', $v->id)}}" class="btn btn-default btn-xs">Uredi</a> 
			</p>
		</div>
		<hr>
	@endforeach

	</div> <!-- col-md-10 col-md-offset-2 -->
</div> <!-- .container -->

@stop
