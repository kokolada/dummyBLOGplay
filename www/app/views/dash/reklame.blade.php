@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="reklame">		
	<div class="col-md-9 col-md-offset-1">		
	
	<h2 class="page-header"><i class="fa fa-fw fa-pencil"></i> Uredi reklame</h2>	

		{{Form::open(array('files' => true))}}

		<div class="panel panel-default">
			<div class="panel-heading">
			    <h3 class="panel-title">Uredi postojeće reklame</h3>
			    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
			</div>
			<div class="panel-body">
				<h4 align="center">Reklame pool 1</h4>
				<hr>
				<div class="row">
				@if(isset($reklame['reklame1']))
				@foreach($reklame['reklame1'] as $r1)
					<div class="col-md-3">
						<img class="img-responsive imageBanner" src="{{$r1->slika}}">
						<center><a class="btn btn-default btn-xs odmakni" href="{{route('reklamedashObrisi', $r1->id)}}"><i class="fa fa-fw fa-trash"></i> Obriši</a></center>
					</div>
				@endforeach
				@endif
				</div>

				<h4 align="center">Reklame pool 2</h4>
				<hr>
				<div class="row">
				@if(isset($reklame['reklame2']))
				@foreach($reklame['reklame2'] as $r2)
					<div class="col-md-3">
						<img class="img-responsive imageBanner" src="{{$r2->slika}}">
						<center><a class="btn btn-default btn-xs odmakni" href="{{route('reklamedashObrisi', $r2->id)}}"><i class="fa fa-fw fa-trash"></i> Obriši</a></center>
					</div>
				@endforeach
				@endif
				</div>

				<h4 align="center">Reklame pool 3</h4>
				<hr>
				<div class="row">
				@if(isset($reklame['reklame3']))
				@foreach($reklame['reklame3'] as $r3)
					<div class="col-md-3">
						<img class="img-responsive imageBanner" src="{{$r3->slika}}">
						<center><a class="btn btn-default btn-xs odmakni" href="{{route('reklamedashObrisi', $r3->id)}}"><i class="fa fa-fw fa-trash"></i> Obriši</a></center>
					</div>
				@endforeach
				@endif
				</div>
			</div>
		</div>

		<br>
		<div class="panel panel-default">
			<div class="panel-heading">
			    <h3 class="panel-title">Dodaj novu reklamu</h3>
			    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
			</div>
			<div class="panel-body">
				{{Form::label('slika', 'Slika:')}}
				{{Form::file('slika',['class' => 'btn btn-default btn-sm','required' => 'required'])}} <br>
				<div class="col-md-6" id="noPadd">
					{{Form::label('kategorija', 'Kategorija:')}}		
					{{Form::select('kategorija', array('1' => 'pool1', '2' => 'pool2', '3' => 'pool3'),null, array('class' => 'form-control'))}} <br>
				</div>
				<div class="col-md-12"><hr></div>
				{{Form::submit('Dodaj reklamu',['class' => 'btn btn-primary pull-right'])}}
			</div>
		</div>
		{{Form::close()}}
</div>
</div>
@stop