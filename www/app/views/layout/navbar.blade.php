<?php 
if(!Session::has('logo'))
    Session::put('logo', DB::table('logo')->orderBy('id', 'desc')->pluck('link')); 
?>
<nav class="navbar navbar-static-top" role="navigation" id="navbarMaster">
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
                <ul class="nav navbar-nav pull-right" id="navigacija">
                    <li name="pocetna"><a href="{{route('home')}}"><i class="fa fa-fw fa-home"></i> POČETNA</a></li>
                    <li name="ocdom"><a href="{{route('o-cdom')}}"><i class="fa fa-fw fa-credit-card"></i> O CDOM CARD</a></li>
					<li name="uclanise"><a href="{{route('clanstvo')}}"><i class="fa fa-fw fa-plus"></i> UČLANI SE</a></li>
					<li name="partneri"><a href="{{route('partneri')}}"><i class="fa fa-fw fa-users"></i> PARTNERI</a></li>
					<li ><a target="_blank" href="http://www.c-dom.org"><i class="fa fa-fw fa-link"></i> CDOM</a></li>
					<li name="kontakt"><a href="{{route('kontakt')}}"><i class="fa fa-fw fa-user"></i> KONTAKT</a></li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

<script>
    $(function(){
        $('li[name='+$('div[name]').attr('name')+']').addClass('active');
    });
</script>