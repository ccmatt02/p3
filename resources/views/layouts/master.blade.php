<!doctype html>
<html>
<head>

	<title>@yield('title')</title>
	<meta charset='utf-8'>

  	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
    <link href='css/main.css' rel='stylesheet'>


</head>
<body>
	<a href='/'>
	  <div class="banner">
	      <h1 class="banner-head">
	          Lorem Ipsum<BR>
	            and<BR>
	        Random User Generator
	      </h1>
	  </div>
	</a>

	@yield('mainContent')

 <footer> <BR><BR> @yield('footer') </footer>
</body>
</html>
