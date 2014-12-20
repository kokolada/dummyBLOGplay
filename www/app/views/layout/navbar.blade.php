<?php 
if(!Session::has('logo'))
    Session::put('logo', DB::table('logo')->orderBy('id', 'desc')->pluck('link')); 
?>
<nav class="navbar navbar-static-top" role="navigation" id="as">
        <div class="container">

            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{route('dashboard')}}">
                    <img class="img-responsive" src="{{Session::get('logo')}}" alt="">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav pull-right">
                    <li class="active"><a href="{{route('home')}}">POČETNA</a></li>
                    <li><a href="{{route('o-cdom')}}">O CDOM CARD</a></li>
					<li><a href="{{route('clanstvo')}}">UČLANI SE</a></li>
					<li><a href="{{route('partneri')}}">PARTNERI</a></li>
					<li><a href="#">CDOM</a></li>
					<li><a href="#">KONTAKT</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>