@extends('layout.master')

@section('content')

<div class="container">
	<div class="row razmak">
		<div class="col-md-12">
			<a href="#"><img class="img-responsive imageBanner" src="http://placehold.it/780x140/612b65/fff&amp;text=Partner+1"></a>
		</div>
	</div>

	<div class="row razmak">
		<div class="col-md-8">
			@include('Home/Carousel')
		</div>

		<div class="col-md-4">
			<section name="3 reklame">
			<ul class="reklame">
				<li><a href="#"><img class="img-responsive reklame123" src="http://placehold.it/360x143/66C3FF/000&amp;text=Reklama"></a></li>
				<li><a href="#"><img class="img-responsive reklame123" src="http://placehold.it/360x143/66C3FF/000&amp;text=Reklama"></a></li>
				<li><a href="#"><img class="img-responsive reklame123" src="http://placehold.it/360x143/66C3FF/000&amp;text=Reklama"></a></li>
			</ul>				 
			</section>
		</div>
	</div>

	<div class="row razmak">
		<div class="col-md-8">
			<section name="banner">
				<a href="#"><img class="img-responsive imageBanner" src="http://placehold.it/780x140/e8117f/fff&amp;text=Partner+2"></a>
			</section>
		</div>
		<div class="col-md-4">
			<a href="#"><img class="img-responsive" src="http://placehold.it/360x136/e8117f/fff&amp;text=Uclani+se"></a>
		</div>
	</div> 


	<div class="row razmak">
		<div class="col-md-8">
			<div class="vijesti razmakVijesti">
				<h3 id="naslovVijesti">{{$vijest->naslov}}</h3>
				<div class="col-md-12">
					<a href="#"><img class="slikaVijesti" src="{{$vijest->slika}}"></a>
				</div>
				<div class="infoVijest">
					<p align="justify">{{$vijest->sadrzaj}}</p>
				</div>
			</div>
		</div>		

		<div class="col-md-4">
			<div class="reklame">
				<a href="#"><img class="razmak" src="http://placehold.it/360x136/612b65/fff&amp;text=SedmicneVijesti.pdf"></a>
				<a href="#"><img class="razmak" src="http://placehold.it/360x300/43609C/fff&amp;text=Facebook"></a>
			</div>
		</div>
	</div>



</div>

@stop
