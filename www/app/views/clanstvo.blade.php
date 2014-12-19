@extends('layout.master')

@section('content')

<div class="container">
	
	<center><h1>Učlani se</h1></center>
	<br>
	
	<div class="col-md-4 col-md-offset-2" id="licno">
		<h3>U kancelariji</h3>
		<hr>
		<p><span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque id, ad nam tempora, aut nesciunt obcaecati incidunt molestiae aspernatur sapiente eligendi. Incidunt quod quae consequatur reiciendis unde ab perferendis tempore.</span><span>Ipsum fuga ipsam porro, esse incidunt laboriosam. Explicabo iusto cum incidunt, dolorum consequuntur maiores placeat fugiat eos iure recusandae cumque voluptate ab delectus quibusdam doloribus ex at accusamus earum distinctio.</span></p>
		<small>Adresa: Ulica Antonio Aničića br.16</small>
		<p><small>Tel: 036/884-255</small></p>
	</div>

	<div class="col-md-5" >
		<h3>Online učlanjenje</h3>
		<hr>
		<p>Klikom na tipku ispod, otvara se prozor za popunjavanje ličnih podataka.</p>
		<br><br>
		<a href="/onlineClanstvo" class="btn btn-info btn-lg" role="button">Pošalji podatke</a>
	</div>
</div>

@stop