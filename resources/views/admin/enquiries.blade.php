@extends('admin.global')
@section('title') Recent Enquiries @endsection

@section('main')
	<br>
	<div class="container">
		@if(count($ENQUIRIES) > 0)	
			<h5>This table shows all enquiries made by people from the main site.</h5>
			<br>
			<table>
				<thead>
					<tr>
						<td>Name</td>
						<td>Email</td>
						<td>Phone number</td>
						<td>Enquiry</td>
					</tr>
				</thead>
				<tbody>
					@foreach($ENQUIRIES as $object)
						<tr>
							<td>{{ $object -> name }}</td>
							<td><code>{{ $object -> email }}</code></td>
							<td><code>{{ $object -> tel }}</code></td>
							<td><a href="/admin/enquiries/{{ $object -> id }}">View</a></td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@else
			<h5 class="red-text">No enquiries have been made yet.</h5>
		@endif
	</div>
@endsection