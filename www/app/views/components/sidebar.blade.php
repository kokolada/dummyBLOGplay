<h1>LINKS</h1>
<ul class="link-list">
	<li><a href="{{route('blog')}}">Blog</a></li>
	<li><a href="{{route('journal')}}">Journal</a></li>
	<li><a href="{{route('both')}}">both</a></li>
	<li><a href="{{route('about')}}">About Me</a></li>
    <li><a href="{{route('books')}}">BooksToRead</a></li>
</ul>

<h1>ARCHIVE</h1>
<ul class="archive">
    <li><a href="#">2015 February</a></li>
    <li><a href="#">2015 January</a></li>
    <li><a href="#">2014 December</a></li>
    <li><a href="#">2014 November</a></li>
</ul>

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