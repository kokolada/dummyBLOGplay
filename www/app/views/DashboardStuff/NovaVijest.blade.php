{{Form::open(array('files' => true))}}
	
	<div class="form-group ">
        <label for="naslov">Naslov:</label>
        <input required type="text" class="form-control" name="naslov" id="naslov" placeholder="Unesi naslov">
    </div>
    <div class="form-group">
        <label for="textarea">Sadržaj:</label>
        <textarea required class="form-control" name="textarea" id="textarea">Ovdje unesi sadržaj vijesti..</textarea>
    </div>
	<div class="form-group form-group-sm">
        <label for="slika">Dodaj sliku:</label>
        <span> <small>(Preporuka: 740x250)</small></span>
        <br>
        <input required type="file" id="slika" name="slika" class="btn btn-default btn-sm" value="Dodaj sliku">
    </div>
	<hr>
    <input type="submit" class="btn btn-primary pull-right" value="Dodaj vijest">

		<!-- {{Form::label('naslov', 'Naslov: ')}}
		{{Form::text('naslov', null, ['placeholder' => 'naslov' , 'class' => ''])}} <br> -->
		<!-- {{Form::label('textarea', 'Sadrzaj: ')}}
		{{Form::textarea('textarea', null, ['placeholder' => 'sadrzaj'])}} <br> -->
		<!-- {{Form::label('slika', 'Slika: ')}}
		{{Form::file('slika')}} <br> -->
		<!-- {{Form::submit('Dodaj vijest')}} <br> -->

{{Form::close()}}