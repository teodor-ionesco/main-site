@extends('global')

@section('title') Contact Form @endsection
@section('css')

	main 
	{
		margin: 50px;
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
	<div class="container">
		<div class="flow-text center">Have an enquiry? Do you need any help? Contact us!</div>
		<div class="flow-text center" style="margin-bottom: 25px;">We are just a few clicks away!</div>
	
		<form method="POST" action="/contact">
			{{ csrf_field() }}		    
		      <div class="row">
		      		<div class="col s12 m6 l6">
				        <div class="input-field ">
				          <i class="material-icons prefix">account_circle</i>
				          <input value="{{ old('name') }}" name="name" id="name" required="" type="text" class="validate">
				          <label for="name">Your Name</label>
				        </div>
				        <div class="input-field ">
				          <i class="material-icons prefix">email</i>
				          <input name="email" value="{{ old('email') }}" id="email" type="email" class="validate">
				          <label for="email">Email address *</label>
				        </div>
				        <div class="input-field">
				          <i class="material-icons prefix">account_circle</i>
				          <input id="tel" type="tel" name="tel" value="{{ old('tel') }}" class="validate">
				          <label for="tel">Telephone *</label>
				        </div>
				    </div>		      			
		   
		      		<div class="col s12 m6 l6">
				        <div class="input-field">
				          <textarea id="textarea1" name="enquiry" required="" minlength="10" class="materialize-textarea">{{ old('enquiry') }}</textarea>
				          <label for="textarea1">Your Enquiry</label>
				        </div>		      			
		      		</div>
		      </div>
		      <div class="row" style="margin-top:-12px; margin-left:5px;">
		      	<div class="col">
					<div class="flow-text" style="font-size: 18px;">
						* Please provide at least a telephone number or a valid email address.
					</div>		   		      		
		      	</div>
		      </div>   
		      <div class="center-align">
		     	<button type="submit" class="btn green waves-effect">Submit</button>
		      </div>
		</form>
	</div>
@endsection

@section('js')
//<script type="text/javascript">
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