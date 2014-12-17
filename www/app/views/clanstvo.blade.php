@extends('layout.master')

@section('content')

<h1>Online uclanjenje</h1>
<form>
	Ime: <input type="text"> <br>	
	Prezime: <input type="text"> <br>	
	JMGB: <input type="text"> <br>	
	Adresa: <input type="text"> <br>	
	Datum rodjenja: <input type="text"> <br>	
	Dodaj svoju sliku: <input type="file"> <br>	
	Dodaj sliku uplatnice: <input type="file"> <br>	
	
	<input type="submit">
</form>

@stop