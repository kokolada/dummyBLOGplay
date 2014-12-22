@extends('layout.master')

@section('content')

<div class="container" name="pocetna">
	<div class="row razmak">
		<div class="col-md-12" >
			<a href="#">
			<!-- <img class="img-responsive imageBanner" src="http://placehold.it/780x140/612b65/fff&amp;text=Partner+1"> -->
			<img class="img-responsive imageBanner velikiBanner" src="{{$home['banerv']}}">
			</a>
		</div>
	</div>

	<div class="row razmak">
		<div class="col-md-8">
			@include('Home/Carousel')
		</div>

		<div class="col-md-4">
			<section name="3 reklame">
			<ul class="reklame">
				<!-- 
				<li><a href="#"><img class="img-responsive reklame123" src="{{$home['reklame']['reklame2'][0]->slika}}"></a></li>
				<li><a href="#"><img class="img-responsive reklame123" src="{{$home['reklame']['reklame3'][0]->slika}}"></a></li> -->
				@if(!isset($home['reklame']['reklame1'][0]))
				<li><img class="img-responsive reklama123 razmak" src="http://placehold.it/750x250/ff00ff/fff&amp;text=reklama+pool+1" alt="reklama"></li>
				@else
				<li>@include('Home/reklamePool1')</li>
				@endif
				@if(!isset($home['reklame']['reklame2'][0]))
				<li><img class="img-responsive reklama123 razmak" src="http://placehold.it/750x250/ff00ff/fff&amp;text=reklama+pool+2" alt="reklama"></li>
				@else
				<li>@include('Home/reklamePool1')</li>
				@endif
				@if(!isset($home['reklame']['reklame3'][0]))
				<li><img class="img-responsive reklama123 razmak" src="http://placehold.it/750x250/ff00ff/fff&amp;text=reklama+pool+3" alt="reklama"></li>
				@else
				<li>@include('Home/reklamePool1')</li>
				@endif
				
			</ul>				 
			</section>
		</div>
	</div>

	<div class="row razmak">
		<div class="col-md-8">
			<section name="banner">
				<a href="#"><img class="img-responsive imageBanner maliBanner" src="{{$home['banerm']}}"></a>
			</section>
		</div>
		<div class="col-md-4">
			<a href="{{route('clanstvo')}}"><img class="img-responsive maliBanner imageBanner" src="/img/uclanise.png"></a>
		</div>
	</div> 


	<div class="row razmak">
		<div class="col-md-8">

		@foreach($home['vijesti'] as $v)
			<div class="vijesti razmakVijesti">
				<a href="{{route('vijest', $v->id)}}"><img class="slikaVijesti" src="{{$v->slika}}"></a>
				<div class="infoVijest">
					<a href="{{route('vijest', $v->id)}}" alt=""><h3 id="naslovVijesti">{{$v->naslov}}</h3></a>
					<p>{{substr($v->sadrzaj,0,385).'...'}}</p>
				</div>
			</div>
		@endforeach
			
		</div>		

		<div class="col-md-4">
			<div class="reklame">
				<a href="{{route('dl')}}"><img class="razmak" src="http://placehold.it/360x136/612b65/fff&amp;text=SedmicneVijesti.pdf"></a>
				<a target="_blank" href="http://www.facebook.com/cdomcard"><img class="razmak" src="http://placehold.it/360x300/43609C/fff&amp;text=Facebook"></a>
			</div>
		</div>
	</div>



</div>

@stop