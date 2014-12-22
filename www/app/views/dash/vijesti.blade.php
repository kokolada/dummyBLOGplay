@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="vijesti">	
	
	<div class="col-md-6 col-md-offset-1">		

		<h2 class="page-header"><i class="fa fa-fw fa-newspaper-o"></i> Vijesti</h2>		

	@foreach($vijesti as $v)
		<div class="vijesti razmakVijesti">
			<a href="#"><img class="slikaVijesti" src="{{$v->slika}}"></a>
			<div class="infoVijest">
				<a href="#" alt=""><h3 id="naslovVijesti">{{$v->naslov}}</h3></a>
				<p>{{$v->sadrzaj}}</p>
			</div>
			<p>
				<a href="{{route('vijestidashObrisi', $v->id)}}" class="btn btn-default btn-xs"><i class="fa fa-fw fa-trash"></i> Obriši</a> 
				<a href="{{route('vijestidashEdit', $v->id)}}" class="btn btn-default btn-xs"><i class="fa fa-fw fa-pencil"></i> Uredi</a> 
			</p>
		</div>
		<hr>
	@endforeach

	</div> <!-- col-md-10 col-md-offset-2 -->
</div> <!-- .container -->

@stop
