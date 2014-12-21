@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin">	
	
	<div class="col-md-6 col-md-offset-1">
		<h2 class="page-header">PDF vijesti</h2>

		{{Form::open(array('files' => true))}}
			<div id="izmjenaLoga">
				{{Form::label('pdf', 'Promijeni PDF:')}}
				{{Form::file('pdf', ['class' => 'btn btn-default btn-sm'])}}
				<hr>
				{{Form::submit('Sačuvaj', ['class' => 'btn btn-primary pull-right'])}}
			</div>
		{{Form::close()}}
		 
	</div>

</div>


@stop