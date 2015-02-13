@foreach($posts as $post)
	@include('components.post')
    <a href="{{route('post', $post->id)}}#disqus_thread">Comments</a>
	<hr />
@endforeach

<script type="text/javascript">
	/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
	var disqus_shortname = 'tonkablog'; // required: replace example with your forum shortname

	/* * * DON'T EDIT BELOW THIS LINE * * */
	(function () {
    	var s = document.createElement('script'); s.async = true;
    	s.type = 'text/javascript';
    	s.src = '//' + disqus_shortname + '.disqus.com/count.js';
    	(document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
	}());
</script>