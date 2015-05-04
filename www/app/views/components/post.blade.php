<article class="post">
	<div id="ptitle">
		<h1 class="post-title">
			<a href="{{route('post', $post->id)}}"><div id="UKURAC">
				{{$post->title}}
			</div></a>
		</h1>
		<div class="post-meta-div">
	<span class="post-meta">{{$post->created_at}} by <a href="#">Antonio Anicic</a></span>
	</div>
	</div>
	<div id="pcontent">
	<section class="post-content">
		{{$post->content}}
	</section>
	</div>
</article>