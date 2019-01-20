<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
		<style type="text/css">
			@yield('css')
		</style>
		@yield('head')
	</head>
	<body>
		<header>
			<nav class="blue darken-2">
				<div class="nav-wrapper">
				  <a href="/admin/dashboard" class="brand-logo">Dashboard</a>
				  <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				  <ul class="right hide-on-med-and-down">
				    <li><a href="/admin/contact">Contact</a></li>
				     <li><a href="/a/logout">Logout</a></li>
				  </ul>
				</div>
			</nav>

			<ul class="sidenav" id="mobile-demo">
				<li><a href="/admin/contact">Contact</a></li>
				<li><a href="/a/logout">Logout</a></li>
			</ul>
			@yield('header')
		</header>

		<main>
			@yield('main')
		</main>

		<footer>
			@yield('footer')
		</footer>

		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript">
			$(document).ready(function(){
				$('.sidenav').sidenav();
			});
			@yield('js')
		</script>
	</body>
</html>