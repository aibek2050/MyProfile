<!DOCTYPE html>
<html>
<head>
	<title>blog</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('blog.css') }}">
</head>
<body>
	<div id="wall">
		<div class="pink-wall">
			<div class="header">
				<a href=" {{ route('home')}} "><div>Home</div></a>
				<a href=" {{ route('blog')}} "><div>Blog</div></a>
				<a href=" {{ route('contact')}} "><div>Contact</div></a>
			</div>
		</div>
		<div class="white-wall">
			<div class="blog-header">
				<div id="my-blog">My Blog</div>
				<div id="latest">Here are my latest blog posts</div>
			</div>
			<hr>
			<div class="all-blogs">
				<div class="blog">
					<div class="blog-topic">Every developer should have a blog. Here’s why, and how to stick with it.</div>
					<div class="blog-dsc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum tincidunt nulla, id semper mi cursus ac. Fusce turpis urna, condimentum sit amet dolor at, vulputate ultrices massa. Vestibulum non euismod nulla, eu pretium risus. Curabitur porta molestie vulputate...</div>
					<button class="blog-btn">read more</button>
				</div>
				<div class="blog">
					<div class="blog-topic">How to Start a Blog for Free with WordPress – Tutorial for Beginners</div>
					<div class="blog-dsc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum tincidunt nulla, id semper mi cursus ac. Fusce turpis urna, condimentum sit amet dolor at, vulputate ultrices massa. Vestibulum non euismod nulla, eu pretium risus. Curabitur porta molestie vulputate...</div>
					<button class="blog-btn">read more</button>
				</div>
				<div class="blog">
					<div class="blog-topic">How to Grow Your Audience and Share Your Content with the World</div>
					<div class="blog-dsc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In bibendum tincidunt nulla, id semper mi cursus ac. Fusce turpis urna, condimentum sit amet dolor at, vulputate ultrices massa. Vestibulum non euismod nulla, eu pretium risus. Curabitur porta molestie vulputate...</div>
					<button class="blog-btn">read more</button>
				</div>
			</div>
		</div>
	</div>
</body>
</html>