@extends('global')

@section('css')


@endsection
@section('title') Index @endsection
@section('main')


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