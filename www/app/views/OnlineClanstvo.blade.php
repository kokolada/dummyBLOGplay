@extends('layout.master')

@section('content')

{{Form::open(array('files' => true))}}
<div class="container">
	<div class="col-md-6 col-md-offset-3" id="clanstvo">
	<h3>Online učlanjenje</h3>
	<hr>
    <form>
        <div class="form-group form-group-sm">
            <label for="Ime">Ime:</label>
            <input required type="text" class="form-control" name="Ime" id="usr">
        </div>
        <div class="form-group form-group-sm">
            <label for="Prezime">Prezime:</label>
            <input required type="text" class="form-control" name="Prezime" id="usr">
        </div>
        <div class="form-group form-group-sm">
            <label for="JMGB">Matični broj:</label>
            <input required type="text" class="form-control" name="JMBG" id="usr">
        </div>
        <div class="form-group form-group-sm">
            <label for="Adresa">Adresa:</label>
            <input required type="text" class="form-control" name="Adresa" id="usr">
        </div>
        <div class="form-group form-group-sm">
            <label for="Datum">Datum rođenja:</label>
            <input required type="text" class="form-control" name="Datum" id="usr">
        </div>
        <div class="form-group form-group-sm">
            <label for="usr">Dodaj svoju sliku:</label>
            <br>
            {{Form::file('slika', ['class' => 'btn btn-default btn-sm', 'value' => 'Dodaj sliku', 'required' => 'required'])}}
        </div>
        <div class="form-group form-group-sm">
            <label for="usr">Dodaj sliku uplatnice:</label>
            <br>
            {{Form::file('uplatnica', ['class' => 'btn btn-default btn-sm btn-file', 'value' => 'Dodaj uplatnicu', 'required' => 'required'])}}
        </div>
        <hr>
        <input type="submit" class="btn btn-primary pull-right" value="Učlani se">
    </form>
    </div>
</div>

{{Form::close()}}
@stop