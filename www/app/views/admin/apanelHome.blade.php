@extends('layout.master')

@section('adminContent')
<div id="adminContainer" class="container row">
	<div class="four columns">
		<div class="row">
			<a href="{{route('writePost')}}" class="button twelwe columns">Write</a>
		</div>
	</div>
	<div class="eight columns">
		@foreach($clanci as $clanak)
			<div class="row">
				<div class="ten columns">
					<span>{{$clanak->title}}</span>
				</div>
				<div class="two columns">
						<a href="{{route('edit', $clanak->id)}}">edit</a> <br>
						<a href="{{route('edit', $clanak->id)}}">delete</a> <br>
				</div>
			</div>
		@endforeach
	</div>
</div>
@stop