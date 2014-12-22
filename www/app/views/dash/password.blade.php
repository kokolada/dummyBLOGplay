@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="pw">		
	<div class="col-md-6 col-md-offset-1">		
	
	<h2 class="page-header"><i class="fa fa-fw fa-pencil"></i> Promijeni password</h2>		

		{{Form::open()}}
			<div id="izmjenaLoga">
				{{Form::label('trenutniPW', 'Stari password: ')}}
				{{Form::text('trenutniPW', null, ['class' => 'form-control'])}} <br>
				{{Form::label('noviPW', 'Novi password: ')}}
				{{Form::text('noviPW', null, ['class' => 'form-control'])}}
				<hr>
				{{Form::submit('Sačuvaj', ['class' => 'btn btn-primary pull-right'])}}
			</div>
		{{Form::close()}}
		 
	</div>

</div>


@stop