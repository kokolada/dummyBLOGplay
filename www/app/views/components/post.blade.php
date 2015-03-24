<article class="post">
	<span class="post-meta">{{$post->created_at}}</span>
	<h2 class="post-title"><a href="{{route('post', $post->id)}}">{{$post->title}}</a></h2>
	<hr class="breaker">
	<section class="post-content">
		{{$post->content}}
	</section>
</article>