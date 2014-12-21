<link rel="stylesheet" type="text/css" href="/text_editor_plugin/jquery-te-1.4.0.css">
<link rel="stylesheet" type="text/css" href="/text_editor_plugin/jqtecustom.css">
<script type="text/javascript" src="/text_editor_plugin/jquery-te-1.4.0.min.js"></script>

        <!-- Navigation -->
        <nav class="navbar-inverse" role="navigation">
           
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{route('dashboard')}}"><i class="fa fa-fw fa-plus"></i> Nova vijest</a>
                    </li>
                    <li>
                        <a href="{{route('vijestidash')}}"><i class="fa fa-fw fa-newspaper-o"></i> Vijesti</a>
                    </li>
		    <li>
                        <a href="{{route('ocdomdash')}}"><i class="fa fa-fw fa-credit-card"></i> O CDOM Card</a>
                    </li>
                    <li>
                        <a href="{{route('logodash')}}"><i class="fa fa-fw fa-picture-o"></i> Logo stranice</a>
                    </li>
                    <li>
                        <a href="{{route('banervelikidash')}}"><i class="fa fa-fw fa-picture-o"></i> Banner 1</a>
                    </li>
                    <li class="active">
                        <a href="{{route('banermalidash')}}"><i class="fa fa-fw fa-picture-o"></i> Banner 2</a>
                    </li>
                    <li>
                        <a href="{{route('reklamedash')}}"><i class="fa fa-fw fa-picture-o"></i> Reklame</a>
                    </li>
                    <li>
                        <a href="{{route('partneridash')}}"><i class="fa fa-fw fa-users"></i> Partneri</a>
                    </li>
                    <li>
                        <a href="{{route('passworddash')}}"><i class="fa fa-fw fa-key"></i> Promijeni password</a>
                    </li>
                    <li>
                        <a href="{{route('kontaktdash')}}"><i class="fa fa-fw fa-user"></i> Kontakt</a>
                    </li>
                    <li>
                        <a href="{{route('pdfdash')}}"><i class="fa fa-fw fa-users"></i> PDF vijesti</a>
                    </li>
                    <li>
                        <a href="{{route('logout')}}"><i class="fa fa-fw fa-sign-out"></i> Logout</a>
                    </li>
                    <!-- <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="demo" class="collapse">
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                            <li>
                                <a href="#">Dropdown Item</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                     -->
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

<script type="text/javascript">
    $(document).ready(function() {
        $("textarea").jqte();
    });
</script>