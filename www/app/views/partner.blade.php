@extends('layout.master')
@section('content')

<div class="container">
	<div class="col-md-6 col-md-offset-3" id="pozadina">
		<br>
        <div class="col-md-4" id="partnerPics">
            <a href="#">
                <img class="img-responsive" src="{{$partner->slika}}">
            </a>
        </div>

        <div class="col-md-6 partnerInfo">
            <h3>{{$partner->naziv}}</h3>
            <a href="#">
                <p>{{$partner->sajt}}</p>
            </a>
            <small><address>Marsala Tita bb, Mostar, BiH</address></small>
        </div>

        <div class="col-md-12 partnerInfo">
            <h4>Pogodnosti</h4>
            <ul id="pogodnostiLista">
                {{$partner->pogodnosti}}
            </ul>
            <br>
            <h4>O partneru</h4>
            <p align="justify">{{$partner->opartneru}}</p>
            {{$partner->grupa}} <br>
        </div>
    </div>
</div>

@stop

