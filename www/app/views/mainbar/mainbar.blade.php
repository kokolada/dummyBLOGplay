<div class="nine columns" id="mainbar">
<br />	<br />
@foreach($clanci as $clanak)
<div class="section">
	<label style="color:gray;margin-left:1em;">{{date("l, jS \\of F Y \\a\\t H:i",strtotime($clanak->created_at))}}</label>
	<h1 style="font-weight: 600;"><a href="{{route('clanak', $clanak->id)}}">{{$clanak->title}}</a></h1>
	<div>{{$clanak->content}}</div>
</div>
<hr />
@endforeach
</div>
