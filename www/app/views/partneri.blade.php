@extends('layout.master')

@section('content')
<div class="container" id="partneri">
	<br>
	<h2>Gold partneri</h2>
	<hr>
	<div class="row">
	@foreach($partneri['gold'] as $g)
	    @include('Home/goldPartnerThumb')
	@endforeach   	    
	</div>
	<br>
	<h2>Maxi partneri</h2>
	<hr>
	<div class="row">
	@foreach($partneri['maxi'] as $mx)
	    @include('Home/maxiPartnerThumb')
	@endforeach	    
	</div>
	<br>
	<h2>Midi partneri</h2>
	<hr>
	<div class="row">
	@foreach($partneri['midi'] as $md)
	    @include('Home/midiPartnerThumb')
	@endforeach		    
	</div>
	<br>
	<h2>Mini partneri</h2>
	<hr>
	<div class="row">
	@foreach($partneri['mini'] as $mn)
	    @include('Home/miniPartnerThumb')
	@endforeach	    
	</div>
	@include('partner')
</div>

@stop