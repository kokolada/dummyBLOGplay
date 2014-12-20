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
                <h3 class="pull-left" id="naslovDash"><i class="fa fa-fw fa-dashboard"></i> CDOM Dashboard</h3>
                <ul class="nav navbar-nav pull-right" id="listaNavDash">
                    <li><a href="{{route('home')}}">POČETNA</a></li>
                    <li><a href="{{route('o-cdom')}}">O CDOM CARD</a></li>
        			<li><a href="{{route('clanstvo')}}">UČLANI SE</a></li>
        			<li><a href="{{route('partneri')}}">PARTNERI</a></li>
        			<li><a href="#">CDOM</a></li>
        			<li><a href="{{route('kontakt')}}">KONTAKT</a></li>
                </ul>
         </nav>        

         @yield('content')

     </div>
     @include('layout.footer')

     <script type="text/javascript" src="/Bootstrap/js/custom.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
 </body>
 </html>