<div class="row">
	<div class="two columns">
		<a href="{{route('admin')}}">admin login</a>
			<div id="avatar">
				<img src="http://wallpapers.wallhaven.cc/wallpapers/full/wallhaven-31643.jpg" alt="">
				<a href="{{route('about')}}"><button id="about-me-text">About Me</button></a>
			</div>
	</div>

	<div class="ten columns">
		<div class="main-header">
			<span id="header-text"></span>
    		<input id="search" type="text" placeholder="search for a title">
    	</div>
    	<div id="blog-switch">
			<ol>
    			<a href="{{route('books')}}"><li>BooksToRead</li></a>
    		</ol>

			<ul>
				<li class="active">Blog</li>
				<li>Journal</li>
				<li>both</li>
			</ul>
		</div>
	</div>
</div>