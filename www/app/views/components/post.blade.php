<article class="post">
	<span class="post-meta">{{$post->created_at}}</span>
	<h1 class="post-title"><a href="{{route('post', $post->id)}}">{{$post->title}}</a></h1>

	<section class="post-content">
		{{$post->content}}
	</section>
</article>