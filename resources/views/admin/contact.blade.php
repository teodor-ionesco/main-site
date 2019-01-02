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
		<h3>Modify contact email</h3>
		<form method="POST">
			{{ csrf_field() }}
			<input type="text" hidden name="_method" value="PATCH">
			<div class="row">
				<div class="col" title="Emails to which the requests from the main site will be sent.">
					Contact emails: 
				</div>
				<div class="col">
					<div class="_e" _e="0">
						<input required="" type="email" name="email[0]" placeholder="E-mail address" class="inline">
						<div class="btn red waves-effect _deleleme">-</div>
					</div>
				</div>
				<div class="btn blue waves-effect _addeleme">+</div>
			</div>
		</form>
	</div>
@endsection
@section('js')
	$('._deleleme').each(function(id, elem) {
		$(elem).click(function(el) {
			$(el).parent().remove();
		});
	});

	$('._addeleme').each(function(id, elem) {
		$(elem).click(function(el){
			var last = $('._e').last().attr('_e');
			var data = '<div class="_e" _e="'+ parseInt(last+1) +'"> \
							<input required="" type="email" name="email['+ parseInt(last+1) +']" placeholder="E-mail address" class="inline"> \
							<div class="btn red waves-effect _deleleme">-</div> \
						</div>';
			$(el).before(data);
		});
	});
@endsection