@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="vijesti">	
	
	<div class="col-md-6 col-md-offset-1">		

		<h2 class="page-header"><i class="fa fa-fw fa-newspaper-o"></i> Vijesti</h2>		

	@foreach($vijesti as $v)
		<div class="vijesti razmakVijesti">
			<div class="vijesti razmakVijesti col-md-12">
				<div class="col-md-4"> 
					<a href="{{route('vijest', $v->id)}}"><img class="img-responsive" src="{{$v->slika}}"></a>
				</div>
				<div class="col-md-8">
					<a href="{{route('vijest', $v->id)}}" alt=""><h3 id="naslovVijesti">{{$v->naslov}}</h3></a>
					<p align="justify">{{substr($v->sadrzaj,0,240).'...'}}</p>
				</div>
			</div>
			<p align="right">
				<a href="{{route('vijestidashObrisi', $v->id)}}" class="btn btn-default btn-xs"><i class="fa fa-fw fa-trash"></i> Obriši</a> 
				<a href="{{route('vijestidashEdit', $v->id)}}" class="btn btn-default btn-xs"><i class="fa fa-fw fa-pencil"></i> Uredi</a> 
			</p>
		</div>
		<hr>
	@endforeach

	</div> <!-- col-md-10 col-md-offset-2 -->
</div> <!-- .container -->

@stop
