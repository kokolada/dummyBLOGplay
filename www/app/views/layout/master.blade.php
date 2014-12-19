<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/custom.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
	<div id="wrap">
	@include('layout.navbar')

	@yield('content')
	</div>
	@include('layout.footer')
	


	<script type="text/javascript" src="/Bootstrap/js/custom.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>