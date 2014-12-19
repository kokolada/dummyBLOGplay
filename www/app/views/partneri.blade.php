@extends('layout.master')

@section('content')
<div class="container" id="partneri">
	<br>
	<h2>Gold partneri</h2>
	<hr>
	<div class="row">
	    @include('Home/goldPartnerThumb')
	    @include('Home/goldPartnerThumb')
	    @include('Home/goldPartnerThumb')
	    @include('Home/goldPartnerThumb')	    	    
	</div>
	<br>
	<h2>Maxi partneri</h2>
	<hr>
	<div class="row">
	    @include('Home/maxiPartnerThumb')	    	    
	    @include('Home/maxiPartnerThumb')	    	    
	    @include('Home/maxiPartnerThumb')	    	    
	    @include('Home/maxiPartnerThumb') 	    
	</div>
	<br>
	<h2>Midi partneri</h2>
	<hr>
	<div class="row">
	    @include('Home/midiPartnerThumb') 	    
	    @include('Home/midiPartnerThumb') 	    
	    @include('Home/midiPartnerThumb') 	    
	    @include('Home/midiPartnerThumb')	    
	</div>
	<br>
	<h2>Mini partneri</h2>
	<hr>
	<div class="row">
	    @include('Home/miniPartnerThumb')	    
	    @include('Home/miniPartnerThumb')	    
	    @include('Home/miniPartnerThumb')	    
	    @include('Home/miniPartnerThumb')
	    @include('Home/miniPartnerThumb')	    
	    @include('Home/miniPartnerThumb')	    
	    @include('Home/miniPartnerThumb')	    
	    @include('Home/miniPartnerThumb')	    
	</div>
	@include('partner')
</div>

@stop