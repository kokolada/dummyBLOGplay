<div class="leftC">
    <span class="sidebartitle">ARCHIVE</span>
    <ul class="archive">
        <li><a href="#">February 2015</a></li>
        <li><a href="#">January 2015</a></li>
        <li><a href="#">December 2014</a></li>
        <li><a href="#">November 2014</a></li>
    </ul>
</div>

<!-- <div id="default-example">
        @if(isset($mjeseci))
            @foreach($mjeseci as $index=>$mjesec)
                <?php /*$m = date_format(date_create($mjesec->created_at), "m");*/ ?>
                <li class="mjc open" ><a href="#">{{date("Y F",strtotime($mjesec->created_at))}}</a></li>
                <ul>
                    @foreach($clanci as $clanak)
                        @if(date_format(date_create($clanak->created_at), "m") == $m)
                            <li><a href="{{route('clanak', $clanak->id)}}">{{$clanak->title}}</a></li>
                        @endif
                    @endforeach
                </ul>
            @endforeach
        @endif
    </div>

    <script>
    window.onload = function (){
        $('#default-example').collapse({
            query: '.mjc'
        });
    }
    </script>
    -->