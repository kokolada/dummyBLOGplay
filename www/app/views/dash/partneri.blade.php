@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="partneri">		
	<div class="col-md-9 col-md-offset-1">		
	
	<h2 class="page-header"><i class="fa fa-fw fa-pencil"></i> Uredi partnere</h2>

	<div class="panel panel-default">
		<div class="panel-heading">
		    <h3 class="panel-title">Uredi postojeće partnere</h3>
		    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
		</div>
		<div class="panel-body">
		{{Form::open(array('files' => true))}}

		<h4 align="center">Gold partneri</h4>
		<hr>
		<div class="row">
			@foreach($partneri['gold'] as $g)
				<div class="col-md-3">
					@include('Home/goldPartnerThumb')
					<center><a class="btn btn-default btn-xs odmakni" href="{{route('partneridashObrisi', $g->id)}}"><i class="fa fa-fw fa-trash"></i> Obriši</a></center>
				</div>
			@endforeach
		</div>

		<h4 align="center">Maxi partneri</h4>
		<hr>
		<div class="row">
			@foreach($partneri['maxi'] as $mx)	
				<div class="col-md-3">
					@include('Home/maxiPartnerThumb')	
					<center><a class="btn btn-default btn-xs odmakni" href="{{route('partneridashObrisi', $mx->id)}}"><i class="fa fa-fw fa-trash"></i> Obriši</a></center>
				</div>
			@endforeach
		</div>

		<h4 align="center">Midi partneri</h4>
		<hr>
		<div class="row">
			@foreach($partneri['midi'] as $md)
				<div class="col-md-3">
					@include('Home/midiPartnerThumb')
					<center><a class="btn btn-default btn-xs odmakni" href="{{route('partneridashObrisi', $md->id)}}"><i class="fa fa-fw fa-trash"></i> Obriši</a></center>
				</div>
			@endforeach
		</div>

		<h4 align="center">Mini partneri</h4>
		<hr>
		<div class="row">
			@foreach($partneri['mini'] as $mn)
				<div class="col-md-3">	
					@include('Home/miniPartnerThumb')
					<center><a class="btn btn-default btn-xs odmakni" href="{{route('partneridashObrisi', $mn->id)}}"><i class="fa fa-fw fa-trash"></i> Obriši</a></center>
				</div>
			@endforeach
		</div>
		</div>
	</div>

	<div class="panel panel-default">
		<div class="panel-heading">
		    <h3 class="panel-title">Dodaj novog partnera</h3>
		    <span class="pull-right clickable"><i class="glyphicon glyphicon-chevron-up"></i></span>
		</div>
		<div class="panel-body">
			{{Form::label('naziv', 'Naziv:')}}
			{{Form::text('naziv', null, ['placeholder' => 'naziv','class' => 'form-control', 'required' => 'required'])}} <br>

			{{Form::label('sajt', 'Web stranica:')}}			
			{{Form::text('sajt', null, ['placeholder' => 'web stranica','class' => 'form-control'])}} <br>
			
			{{Form::label('slika', 'Slika:')}}	
			{{Form::file('slika', ['class' => 'btn btn-default btn-sm','required' => 'required'])}} <br>
			
			{{Form::label('opartneru', 'Opartneru:')}}
			{{Form::textarea('opartneru', null, ['required' => 'required'])}} <br>
			<div class="col-md-6" id="#noPadd">
			{{Form::label('kategorija', 'Kategorija:')}}
			{{Form::select('kategorija', array('1' => 'gold', '2' => 'maxi', '3' => 'midi', '4' => 'mini'),null, array('class' => 'form-control'))}}<br>
			</div><br>
			<div class="col-md-12"><hr></div>
			{{Form::submit('Dodaj partnera',['class' => 'btn btn-primary pull-right'])}}

			{{Form::close()}}
		</div>
	</div>

</div>

@stop