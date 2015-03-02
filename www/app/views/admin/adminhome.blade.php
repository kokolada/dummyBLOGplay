@extends('layout.adminmaster')

@section('content')
<div id="adminContainer" class="container row">
	<div class="four columns">
		<div class="row">
		<br>
			<a href="{{route('writeBlogPost')}}" class="button twelwe columns">New blog post</a>
			<a href="{{route('writeJournalPost')}}" class="button twelwe columns">New journal post</a>
			<a href="{{route('editAboutMe')}}" class="button twelwe columns">Edit About Me</a>
			<a href="{{route('writeBlogPost')}}" class="button twelwe columns">Edit BooksToRead</a>
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
						<a href="{{route('delete', $clanak->id)}}" onclick="return confirm('Are you sure you want to delete this item?');">delete</a> <br>
				</div>
			</div>
		@endforeach
	</div>
</div>
@stop