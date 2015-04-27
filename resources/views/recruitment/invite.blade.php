@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading">Invite</div>

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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/recruitment/invite?id='.$rec_id.'&&mid='.$mem_id) }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						
						
						<div class="col-md-12 col-sm-12 col-xs-12">
			              <div class="info-box">
			                <span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
			                <div class="info-box-content">
			                  <span class="info-box-text">To : </span>
			                  <span class="info-box-number">{{$user->firstname}} {{$user->lastname}}</span>
			                </div><!-- /.info-box-content -->
			              </div><!-- /.info-box -->
			            </div>

						<div class="form-group">

							<label class="col-md-4 control-label">Message</label>
							<div class="col-md-6">
		                      	<textarea name="message" class="form-control" rows="3"></textarea>
		                    </div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-info" style="width:100%;">
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
