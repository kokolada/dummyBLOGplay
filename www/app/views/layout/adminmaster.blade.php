<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tonka Blog</title>

	<meta name="author" content="Antonio Anicic">
    <meta name="description" content="tonkaBlog - progress.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	{{HTML::style('css/normalize.css')}}
	{{HTML::style('css/skeleton.css')}}
	{{HTML::style('css/stil.css')}}

	<link href="//fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700" rel='stylesheet' type='text/css'>
</head>
<body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<div class="container">
		@if(Auth::check())
			<div class="row">
				<a href="{{route('logout')}}" class="button">logout</a>
				<a href="{{route('adminPanel')}}" class="button button-primary">admin home</a>
				<a href="{{route('blog')}}" class="button">home</a>
			</div>
		@endif
	</div>
	<div class="">
		<div class="row">
			<div class="twelwe columns">
				@yield('content')
			</div>
		</div>
	</div>
	
</body>
</html>