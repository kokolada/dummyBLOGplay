@extends('layout.master')

@section('content')
<div class="container" id="partneri" name="partneri">
	<br>
	<h2>Gold partneri</h2>
	<hr>
	<div class="row">
	@foreach($partneri['gold'] as $g)
		<div class="col-lg-3 col-md-4 col-xs-6 thumb" id="kompanija">
		    @include('Home/goldPartnerThumb')
		</div>
	@endforeach   	    
	</div>
	<br>
	<h2>Maxi partneri</h2>
	<hr>
	<div class="row">
	@foreach($partneri['maxi'] as $mx)
		<div class="col-lg-3 col-md-4 col-xs-6 thumb" id="kompanija">
		    @include('Home/maxiPartnerThumb')
		</div>
	@endforeach	    
	</div>
	<br>
	<h2>Midi partneri</h2>
	<hr>
	<div class="row">
	@foreach($partneri['midi'] as $md)
		<div class="col-lg-3 col-md-4 col-xs-6 thumb" id="kompanija">
	   		 @include('Home/midiPartnerThumb')
	    </div>
	@endforeach		    
	</div>
	<br>
	<h2>Mini partneri</h2>
	<hr>
	<div class="row">
	@foreach($partneri['mini'] as $mn)
		<div class="col-lg-3 col-md-4 col-xs-6 thumb" id="kompanija">
	   		 @include('Home/miniPartnerThumb')
	    </div>
	@endforeach	    
	</div>
</div>

@stop