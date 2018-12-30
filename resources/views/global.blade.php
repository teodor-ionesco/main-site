<!DOCTYPE html>
<html lang="EN">
<head>
	<title>@yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
	<style type="text/css">@yield('css')</style>
	@yield('head')
</head>
	<body>
		@yield('body')

		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript">
			@yield('js')
		</script>
	</body>
</html>