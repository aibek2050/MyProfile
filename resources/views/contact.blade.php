<!DOCTYPE html>
<html>
<head>
	<title>contact</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('contact.css') }}">
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
				<div id="my-blog">Contact</div>
				<div id="latest">Please fill this form in a decent manner</div>
			</div>
			<hr>
			<div class="contact-form">
				<div class="form-container">
					<input type="" name="" placeholder="Name">
					<input type="" name="" placeholder="Email">
					<input id="msg" type="" name="" placeholder="Message">
					<button class="contact-btn">submit</button>
				</div>

			</div>
		</div>
	</div>
</body>
</html>