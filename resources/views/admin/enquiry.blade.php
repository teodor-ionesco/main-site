@extends('admin.global')
@section('title') Recent Enquiries @endsection

@section('main')
	<div class="container">
		<br>
		<div class="row">
			<div class="col">Name: </div>
			<div class="col">{{ $ENQUIRY -> name }}</div>
		</div>
		<div class="divider"></div>
		<br>
		<div class="row">
			<div class="col">Email: </div>
			<div class="col">{{ $ENQUIRY -> email }}</div>
		</div>
		<div class="divider"></div>
		<br>
		<div class="row">
			<div class="col">Telephone: </div>
			<div class="col">{{ $ENQUIRY -> tel }}</div>
		</div>		
		<div class="divider"></div>
		<br>
		<div class="row">
			<div class="col">Enquiry: </div>
			<div class="col">{{ $ENQUIRY -> enquiry }}</div>
		</div>
		<div class="divider"></div>
		<br>
		<button onclick="window.history.back()" class="btn blue waves-effect">Go back</button>
	</div>
@endsection

@section('js')
@endsection