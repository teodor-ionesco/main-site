@extends('global')

@section('css')

	main 
	{
		margin-top: 25px;
		margin-bottom: 50px;
	}

	main div
	{
		font-weight: 100 !important;
	}

	blockquote
	{
		margin: 20px 0;
		padding-left: 1.5rem;
		border-left: 5px solid transparent; 
	}	

	main h2
	{
		color: #000000;
	}

@endsection
@section('title') SubDev - Reliable, Fast, Cheap Web Development Solutions! @endsection
@section('header')
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
@endsection	 		

@section('main')

	<div class="container ">
		<div style="margin-top: 40px; margin-bottom: 70px;">
			<div class="center" style="font-size: 30px;">Are you looking for dedicated web developers?</div>
			<div class="center" style="font-size: 30px;">You're at the right place!</div>
		</div>

		<div class="divider hide-on-small-only" style="margin-bottom: 25px; margin-top: 10px;"></div>

		<div class="row" style="margin-top: -37px;">
			<div class="col s12 m12 l6">
				<h2>Reliable Products</h2>
				<div class="flow-text">
					Our company provides scalable services which 
					empower your business to grow naturally. This unlocks the capability
					of adding more complex features, attracting more customers and helping your
					employees manage your services in a professional manner.
				</div>				
			</div>

			<div class="col s12 m0 l6">
				<img src="/images/img1.jpg" class="hide-on-med-and-down hoverable z-index-4" width="350" style="position:relative; top:111px;">
				<div class="hide-on-large-only" style="text-align:center; margin-top: 15px;">
					<img src="/images/img1.jpg" class="responsive-img hoverable z-index-4" width="350" style="position: relative; ">
				</div>
			</div>
		</div>

		<div style="margin: 60px;" class="hide-on-med-and-down"></div>

		<div class="row" style="margin-top: -37px;">
			<div class="col s12 m12 l6">
				<h2>Fast Delivery</h2>
				<div class="flow-text">
					A fast delivery of a web application is a must nowadays, especially on marketing field.
					Therefore we are putting a lot of effort into completing each and every feature that you
					require before the deadline is even over. This guarantees that you 
					will not have to wait for us to finish our job in order to carry on with your company.
				</div>				
			</div>

			<div class="col s12 m0 l6">
				<img src="/images/img1.jpg" class="hide-on-med-and-down hoverable z-index-4" width="350" style="position:relative; top:111px;">
				<div class="hide-on-large-only" style="text-align:center; margin-top: 15px;">
					<img src="/images/img1.jpg" class="responsive-img hoverable z-index-4" width="350" style="position: relative; ">
				</div>
			</div>
		</div>

		<div style="margin: 60px;" class="hide-on-med-and-down"></div>

		<div class="row" style="margin-top: -37px;">
			<div class="col s12 m12 l6">
				<h2>Cheap Price</h2>
				<div class="flow-text">
					Our company provides you numberless services at a very cheap price. The workflow we approach is the agile development which ensures you that you won't end up spending money on products which in the end you do not
					desire.
				</div>				
			</div>

			<div class="col s12 m0 l6">
				<img src="/images/img1.jpg" class="hide-on-med-and-down hoverable z-index-4" width="350" style="position:relative; top:111px;">
				<div class="hide-on-large-only" style="text-align:center; margin-top: 15px;">
					<img src="/images/img1.jpg" class="responsive-img hoverable z-index-4" width="350" style="position: relative; ">
				</div>
			</div>
		</div>

		<div class="divider hide-on-small-only" style="margin-top: 35px;"></div>

		<h2 class="center">
			Really, why us?
		</h2>
	</div>
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
@endsection
@section('js')
//<script>

	$(document).ready(function() {
		$('.sidenav').sidenav();
		$('#dropdown-trigger').dropdown();
	});

	$('.fadein').each(function(index, element)
	{
		function _tmp(_ft) {
			$(element).fadeIn(parseInt(_ft + '000'));
		}

		setTimeout(_tmp, parseInt($(element).attr('_wt') + '000'), $(element).attr('_ft'));
	}); 

//</script>
@endsection