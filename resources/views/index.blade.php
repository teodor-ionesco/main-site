@extends('global')

@section('css')
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

	.cover
	{
		width: 100%;
		height: 300px;
	}

	.cover-container
	{
		position: absolute;
		width: 100%;
		text-align: center;
	}

	h1
	{
		font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Oxygen-Sans,Ubuntu,Cantarell,"Helvetica Neue",sans-serif;
		font-weight: 100;
		font-size: 4rem;
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

@endsection
@section('title') Index @endsection
@section('body')
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

		<div class="blue darken-3 cover">
			<div class="cover-container">
				<h1 class="">Web development solutions</h1>

			</div>
		</div>
 		

 		<br>
		<!--- real navbar 
		<nav class="blue darken-3">
			<div class="nav-wrapper">
				<a href="#!" class="brand-logo">Logo</a>
				<a href="#" data-target="mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
				<ul class="right hide-on-med-and-down">
					<li><a href="sass.html">Sass</a></li>
					<li><a href="badges.html">Components</a></li>
					<li><a href="collapsible.html">Javascript</a></li>
					<li><a href="mobile.html">Mobile</a></li>
				</ul>
			</div>
		</nav>

		<ul class="sidenav" id="mobile">
			<li><a href="sass.html">Sass</a></li>
			<li><a href="badges.html">Components</a></li>
			<li><a href="collapsible.html">Javascript</a></li>
			<li><a href="mobile.html">Mobile</a></li>
		</ul>
		real navbar --->		
	</header>

	<main>
		
	</main>

	<footer>
		
	</footer>
@endsection
@section('js')
//<script>

	$(document).ready(function(){
		$('.sidenav').sidenav();
		$('#dropdown-trigger').dropdown();
	});


//</script>
@endsection