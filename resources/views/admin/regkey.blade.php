@extends('admin.global')

@section('title') Registration Key Setup @endsection
@section('main')
	<div class="container">
		<h5>This section allows you to change the registration key.</h5>
		<form method="POST">
			@csrf
			<table>
				<tbody>
					<tr>
						<td>Current key:</td>
						<td><input type="text" name="regkey" required="" value="{{ $REGKEY }}" id="regkeyfield"></td>
						<td><a class="btn red waves-effect" onclick="generate();">Generate</a></td>
					</tr>
				</tbody>
			</table>
			<button type="submit" class="btn blue waves-effect">Update</button>
		</form>
		<br>
		<h5>Copy and paste the below code to whomever you want to register into site:</h5>
		<table>
			<tbody>
				<tr>
					<td>URL:</td>
					<td><input type="text" readonly="" value="http://{{$_SERVER['SERVER_NAME'] }}/a/register?key={{ $REGKEY }}"></td>
				</tr>
			</tbody>
		</table>
	</div>
@endsection

@section('js')
//	<script type="text/javascript">

	function generate()
	{
		var text = "";
		var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

		for (var i = 0; i < 20; i++)
			text += possible.charAt(Math.floor(Math.random() * possible.length));

		$('#regkeyfield').val(text);
	}

//</script>
@endsection