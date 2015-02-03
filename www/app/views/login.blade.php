@extends('layout.master')

@section('content')
{{Form::open()}}
	<div style="height: 40em;" class="row">
      <div>
        <input style="margin-top: 30%;" autofocus name="c" type="text">
      </div>
    </div>
{{Form::close()}}
@stop