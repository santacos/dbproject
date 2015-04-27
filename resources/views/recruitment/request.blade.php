@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">Request ขอเข้าร่วมกิจกรรม</div> 
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/recruitment/request?id='.$rec_id) }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						
						<h3>To : {{$recruitment}}</h3>
						<br><h3>BY:{{Auth::user()->id}}</h3>

						<div class="form-group">

							<label class="col-md-4 control-label">Message</label>
							<div class="col-md-6">
		                      	<textarea name="message" class="form-control" rows="3"></textarea>
		                    </div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Send
								</button>
							</div>
						</div>
					</form>


   				</div>
			</div>
		</div>
	</div>
</div>
@endsection
