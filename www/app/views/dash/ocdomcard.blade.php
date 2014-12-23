@extends('layout.dMaster')
@section('content')
@include('layout.dashbar')	

<div class="container containerMargin" name="ocdom">
<h2 class="page-header" id="naslovCdom"><i class="fa fa-fw fa-pencil"></i> Uredi informacije o CDOM Card</h2>		
			
			{{Form::open(array('files' => true))}}
			<div class="col-md-5 col-md-offset-1">
				{{Form::label('ocdom', 'Promijeni text o CDOM Card:')}}
				{{Form::textarea('ocdom',$ocdomcard->opis,['placeholder' => 'o cdom card'])}} <br>
				
				{{Form::hidden('stariurl', $ocdomcard->slika)}}				
			</div>
			<div class="col-md-4">				
				@if(isset($ocdomcard))
					<img src="{{$ocdomcard->slika}}" class="img-resposive  img-thumbnail slika">
				@endif
				<br>
				{{Form::label('slika', 'Promijeni sliku:')}}
				{{Form::file('slika',['class' => 'btn btn-default btn-sm'])}}
				<br>
			</div>		
			<div class="col-md-10 col-md-offset-2"><hr></div>
				{{Form::submit('Sačuvaj',['class' => 'btn btn-primary pull-right'])}}	
			{{Form::close()}}
</div>
@stop