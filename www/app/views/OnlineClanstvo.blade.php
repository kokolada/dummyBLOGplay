@extends('layout.master')

@section('content')

<div class="container">
	<div class="col-md-4 col-md-offset-4" id="clanstvo">
	<h3>Online učlanjenje</h3>
	<hr>
    <form>
        <div class="form-group form-group-sm">
            <label for="Ime">Ime:</label>
            <input type="text" class="form-control" name="Ime" id="usr">
        </div>
        <div class="form-group form-group-sm">
            <label for="Prezime">Prezime:</label>
            <input type="text" class="form-control" name="Prezime" id="usr">
        </div>
        <div class="form-group form-group-sm">
            <label for="JMGB">Matični broj:</label>
            <input type="text" class="form-control" name="JMGB" id="usr">
        </div>
        <div class="form-group form-group-sm">
            <label for="Adresa">Adresa:</label>
            <input type="text" class="form-control" name="Adresa" id="usr">
        </div>
        <div class="form-group form-group-sm">
            <label for="Datum">Datum rođenja:</label>
            <input type="text" class="form-control" name="Datum" id="usr">
        </div>
        <div class="form-group form-group-sm">
            <label for="usr">Dodaj svoju sliku:</label>
            <br>
            <input type="file" class="btn btn-default btn-sm" value="Dodaj sliku">
        </div>
        <div class="form-group form-group-sm">
            <label for="usr">Dodaj sliku uplatnice:</label>
            <br>
            <input type="file" class="btn btn-default btn-sm btn-file" value="Dodaj uplatnicu">
        </div>
        <hr>
        <input type="submit" class="btn btn-primary pull-right" value="Učlani se">
    </form>
    </div>
</div>


@stop