@extends('admin.global')

@section('title') Contact Section @endsection
@section('css')
	main
	{
		margin-top: 20px;
	}

	.inline
	{
		display: inline-block;
	}

	h3
	{
		font-weight: 100;
	}
@endsection
@section('main')
	<div class="container">
		<h4>Modify contact email</h4>
		<br>
		<form method="POST">
			{{ csrf_field() }}
			<input type="text" hidden name="_method" value="PATCH">
			<div class="row">
				<div class="col" title="Emails to which the requests from the main site will be sent.">
					Contact emails: 
				</div>
					<div class="col" id="_erealm" style="position: relative; bottom: 20px;">
						@if(empty($CONTACT))
							<div class="_e" _e="0">
								<div class="inline">
									<input required="" type="email" name="email[0]" placeholder="E-mail address" class="inline">
								</div>
								<div class="inline btn red waves-effect" _e="0" onclick="del(this);">-</div>
							</div>
						@else
							@foreach($CONTACT as $key => $object)
								<div class="_e" _e="{{ $key }}">
									<div class="inline">
										<input value="{{ $object }}" required="" type="email" name="email[{{ $key }}]" placeholder="E-mail address" class="inline">
									</div>
									<div class="inline btn red waves-effect" _e="{{ $key }}" onclick="del(this);">-</div>
								</div>
							@endforeach
						@endif
					</div>
				<div class="col" style="position: relative; bottom: 13px;">
					<div class="btn blue waves-effect" onclick="add();">+</div>				
				</div>
				<div class="col" style="position: relative; bottom: 13px;">
					<button type="submit" class="btn blue waves-effect">Update</button>
				</div>
			</div>
		</form>
	</div>
@endsection
@section('js')
// <script type="text/javascript">

	@if(empty($CONTACT))
		var gRealm = 0;	
	@else
		var gRealm = {{ count($CONTACT) }};
	@endif

	/* Autoload stuff */
	$(document).ready(function(){
	});

	/* Delete input email element */
	function del(elem) {
		$("div[_e="+$(elem).attr('_e')+"]").remove();
	}

	/* Add input email element */
	function add() {
		$('#_erealm').append(
			'<div class="_e" _e="'+gRealm+'">\
				<div class="inline">\
					<input required="" type="email" name="email['+gRealm+']" placeholder="E-mail address" class="inline">\
				</div>\
				<div class="inline btn red waves-effect" _e="'+gRealm+'" onclick="del(this);">-</div>\
			</div>'
		);

		gRealm++ ;
	}

// </script>	
@endsection