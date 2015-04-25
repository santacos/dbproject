@extends('app')



@section('content')

	
	<form class="form-horizontal" name="myForm" role="form" method="POST" action="{{ url('/recruitment/hey') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<button type="submit" class="btn btn-primary">submit</button>
	</form>
@endsection
