<!DOCTYPE html>
<html lang="EN">
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<script type="text/javascript" src="/js/app.javascript"></script>
	<style type="text/css">@yield('css')</style>
	@yield('head')
</head>
	<body>
		@yield('body')
		<script type="text/javascript">@yield('js')</script>
	</body>
</html>