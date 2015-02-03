<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tonka Blog</title>

	<meta name="author" content="Antonio Anicic">
    <meta name="description" content="tonkaBlog - progress.">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	{{HTML::style('css/stil.css')}}
	{{HTML::style('css/normalize.css')}}
	{{HTML::style('css/skeleton.css')}}

	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>
<body>

	<div class="container">
	@if(Auth::check())
		<div class="row">
			<a href="{{route('logout')}}" class="button">logout</a>
			<a href="{{route('adminPanel')}}" class="button button-primary">admin home</a>
			<a href="{{route('blog')}}" class="button">home</a>
		</div>
	@else
		<div class="row">
			<div class="seven columns">
				<h1 style="font-weight: 600;" >Tonka Bl<a href="{{route('admin')}}" class="teal-text">o</a>g</h1>
			</div>
			<div class="five columns">
				<div class="eleven columns">
					<h2></h2>
        			<input id="search" type="text" class="twelwe columns" placeholder="search for a title">
      			</div>
			</div>
		</div>
	@endif
		@yield('content')
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	@yield('adminContent')
	
</body>
</html>