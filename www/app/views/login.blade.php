<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/Bootstrap/css/custom.css">
<html>
<head>
	<title>Login u CDOM</title>
</head>
<body id="logCont">
	<div class="container">
		<div class="col-md-6" id="login">

			<h1>CDOM Dashboard</h1>
			{{ Form::open() }}
				<br>	
					<label for="password">Password:</label> 
					<input class="form-control input-lg" type="password" name="password"> <br>
				<input class="btn pull-right btn-lg loginButton" type="submit" value="Login"> <br>
			{{ Form::close() }} 

		</div>
	</div>
</body>
</html>