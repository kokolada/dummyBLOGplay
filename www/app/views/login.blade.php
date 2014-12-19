<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="/Bootstrap/css/custom.css">
<html>
<head>
	<title>Login u CDOM</title>
</head>
<body id="logCont">
	<div class="container">
		<div class="col-md-4" id="login">

			<h3>Login</h3>
			<hr>
			{{ Form::open() }}
				<label for="username">Username:</label> 
				<input class="form-control" type="text" name="username"> <br>

				<label for="password">Password:</label> 
				<input class="form-control" type="password" name="password"> <br>

				<input class="btn btn-info pull-right" type="submit" value="Logiraj se"> <br>
			{{ Form::close() }} 

		</div>
	</div>
</body>
</html>