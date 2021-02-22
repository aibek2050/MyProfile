<!DOCTYPE html>
<html>
<head>
	<title>home</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('home.css') }}">
</head>
<body>
	<div id="wall">
		<div class="pink-wall"></div>
		<div class="empty-wall"></div>
		<div class="white-wall">
			<div class="header">
				<a href=" {{ route('home')}} "><div>Home</div></a>
				<a href=" {{ route('blog')}} "><div>Blog</div></a>
				<a href=" {{ route('contact')}} "><div>Contact</div></a>
			</div>
			<div class="info">
				<div id="firstname">Hi! My name is Aibek.</div>
				<div>I am a sophomore student at Suleyman Demirel University, majoring in information technology. Ever since I was a kid, I have wanted to work in the IT industry...</div>
				<button class="blog-btn">read more</button>
			</div>
		</div>
	</div>

	<img src="img\me.jpg">
</body>
</html>