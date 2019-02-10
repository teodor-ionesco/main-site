<!DOCTYPE html>
<html lang="EN">
<head>
	<title>@yield('title')</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
	<style type="text/css">
		.langnav 
		{
			height: 20px !important; 
			line-height: 20px !important;
		}

		.langnav ul a:hover
		{
			background-color: #0d47a1 !important;
		}

		.langnav #dropdown-lang a:hover
		{
			background-color: #e4e4e4 !important;
		}

		.cover-desktop
		{
			width: 100%;
			height: 360px;
		}

		.cover-mobile
		{
			width: 100%;
			height: 500px;
		}

		.cover-container
		{
			position: absolute;
			width: 100%;
			/*text-align: center;*/
		}

		.fadein
		{
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;		
			color: #ffffff;
			font-size: 33px;
			font-weight: 100;
			display: none;
		}

		.inline
		{
			display: inline-block;
		}

		.check_us_out:hover
		{
			text-decoration: underline;
		}

		body
		{
			display: flex;
			min-height: 100vh;
			flex-direction: column;
			/*background-image: url('/images/abstract2.jpg'); */
			
			background-repeat: no-repeat;
			background-size: cover;
		}

		main
		{
			flex: 1 0 auto;
		}

		h1
		{
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
			font-weight: 100;
			font-size: 3.8rem;
			color: #ffffff;
			top: 100px;
		}

		h2
		{
			font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
			font-weight: 100;
			font-size: 3rem;
			color: #ffffff;
			top: 100px;
		}

		@yield('css')
	</style>
	@yield('head')
</head>
	<body>
		<header>
			<!--- language navbar --->
			<ul id="dropdown-lang" class="right dropdown-content">
				<li>
					<a href="/">
						<span class="flag-icon flag-icon-ro" style="height: 14px; position:relative; top: 1.6px; transform: rotate(180deg);"></span>
						RO
					</a>
				</li>
			</ul>	

			<nav class="blue darken-4 langnav">
				<div class="nav-wrapper">
					<ul class="right" id="lnav_primary">
						<li title="Change language">
							<a href="#!" id="dropdown-trigger" data-target="dropdown-lang">
								<i class="material-icons left langnav" style="position: relative; left: 14px;">arrow_drop_down</i>
								<span class="flag-icon flag-icon-ro" style="height: 14px; transform: rotate(180deg);"></span>
								RO
							</a>
						</li>
					</ul>
				</div>
			</nav>
			<!--- language navbar --->

			@yield('header')
		</header>

		<main>
			@yield('main')
		</main>

		<footer class="page-footer blue darken-3 ">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Web Development Solutions</h5>
						<p class="grey-text text-lighten-4">We are serving our happy customers ever since 2018. More references can be found inline.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">References</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="/about">About us</a></li>
							<li><a class="grey-text text-lighten-3" href="/privacy">Privacy Policy</a></li>
							<li><a class="grey-text text-lighten-3" href="/contact">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright blue darken-4">
				<div class="container">
					© 2018 <a href="/" style="color: #cad6ea">SubDev</a>
					<a class="grey-text text-lighten-4 right" href="#!" id="goToTop">Go to Top</a>
				</div>
			</div>
		</footer>

		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript">
			@if(!empty($_GET['toast']))
				M.toast({html: '{{ $_GET["toast"] }}'});
			@endif
			
			@if(!empty($TOAST))
				M.toast({html: '{{ $TOAST }}'});
			@endif		

			$('#goToTop').click(function(){
				$('html').animate({scrollTop: 0}, 1000);
			});
		</script>
		<script type="text/javascript">
			@yield('js')
		</script>
	</body>
</html>