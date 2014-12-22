<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CDOM Card</title>
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap-theme.css">
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/custom.css">
	<!-- <link rel="stylesheet" type="text/css" href="/Bootstrap/css/sliderCss.css">
	<link rel="stylesheet" type="text/css" href="/Bootstrap/css/lightSlider.css"> -->

	<link href="/Bootstrap/css/sb-admin.css" rel="stylesheet">
	<link href="/Bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
	<div id="wrap">
	@include('layout.navbar')

	@yield('content')
	<div id="push"></div>
	</div>
	@include('layout.footer')
	


	<script type="text/javascript" src="/Bootstrap/js/custom.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</body>
</html>