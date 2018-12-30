<!DOCTYPE html>
<html lang="EN">
<head>
	<title>@yield('title')</title>
	<link href="//fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="//fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/app.css">
	<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.css">
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

			<!--- header cover desktop--->
			<div class="blue darken-3 cover-desktop hide-on-small-only z-depth-2">
				<div class="cover-container">
					<h1 class="center" style="margin-bottom: 60px;">Web development solutions</h1>
					<div class="container">
						<div class="inline left">
							<div class="fadein" _ft="2" _wt="0">
								<i class="material-icons">extension</i>
								Reliable products
							</div>
							<div class="fadein" _ft="2" _wt="3">
								<i class="material-icons" style="transform: scale(1.6)">attach_money</i>
								Cheap price
							</div>	
						</div>

						<div></div>

						<div class="right inline">
							<div class="fadein" _ft="2" _wt="2">
								<i class="material-icons">flash_on</i>
								Fast delivery
							</div>
							<div class="fadein" _ft="2" _wt="4">
								<i class="material-icons inline">business_center</i>
								<a href="#" class="inline green-text text-lighten-3 check_us_out">Check us out!</a>
							</div>		
						</div>		
					</div>
				</div>
			</div>
	 		<!--- header cover desktop --->

			<!--- header cover mobile ---> 
			<div class="blue darken-3 cover-mobile hide-on-med-and-up z-depth-2">
				<div class="cover-container">
					<h1 class="center" style="margin-bottom: 60px;">Web development solutions</h1>
					<div class="container ">
						<div class="fadein" _ft="2" _wt="0">
							<i class="material-icons">extension</i>
							Reliable products
						</div>
						<div class="fadein" _ft="2" _wt="2">
							<i class="material-icons" style="transform: scale(1.6)">attach_money</i>
							Cheap price
						</div>	
						<div class="fadein" _ft="2" _wt="3">
							<i class="material-icons">flash_on</i>
							Fast delivery
						</div>
						<div class="fadein" _ft="2" _wt="4">
							<i class="material-icons inline">business_center</i>
							<a href="#" class="inline green-text text-lighten-3 check_us_out">Check us out!</a>
						</div>		
					</div>
				</div>
			</div>
	 		<!--- header cover mobile ---> 		
		</header>

		<main>
			@yield('main')
		</main>

		<footer class="page-footer blue darken-3 ">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">Footer Content</h5>
						<p class="grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
					</div>
					<div class="col l4 offset-l2 s12">
						<h5 class="white-text">Links</h5>
						<ul>
							<li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
							<li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="footer-copyright blue darken-4">
				<div class="container">
					© 2014 Copyright Text
					<a class="grey-text text-lighten-4 right" href="#!">More Links</a>
				</div>
			</div>
		</footer>

		<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
		<script type="text/javascript">
			@yield('js')
		</script>
	</body>
</html>