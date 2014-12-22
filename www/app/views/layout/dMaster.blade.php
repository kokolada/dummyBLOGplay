<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CDOM Card</title>
    <link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="/Bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/Bootstrap/css/custom.css">

    <link href="/Bootstrap/css/sb-admin.css" rel="stylesheet">
    <link href="/Bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
</head>
<body>
    <div id="wrap">
        <nav class="navbar navbar-inverse navbar-static-top" role="navigation" id="dashMainNav">
                <h3 class="pull-left" id="naslovDash"> CDOM Dashboard</h3>
                <ul class="nav navbar-nav pull-right" id="listaNavDash">
                    <li><a href="{{route('home')}}"><i class="fa fa-fw fa-home"></i> Početna</a></li>
                    <li><a href="{{route('o-cdom')}}"><i class="fa fa-fw fa-credit-card"></i> O CDOM Card</a></li>
        			<li><a href="{{route('clanstvo')}}"><i class="fa fa-fw fa-plus"></i> Učlani se</a></li>
        			<li><a href="{{route('partneri')}}"><i class="fa fa-fw fa-users"></i> Partneri</a></li>
        			<li><a href="{{route('kontakt')}}"><i class="fa fa-fw fa-user"></i> Kontakt</a></li>
                </ul>
         </nav>        

         @yield('content')

     <div id="push"></div>
    </div>
     @include('layout.footer')

     <script type="text/javascript" src="/Bootstrap/js/custom.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
 </body>
 </html>