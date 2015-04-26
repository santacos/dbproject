@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Create activity</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/activity') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>


						<div class="form-group">
							<label class="col-md-4 control-label">Detail</label>
							<div class="col-md-6">
		                      	<textarea name="detail" class="form-control" rows="3"></textarea>
		                    </div>
						</div>


						<div class="form-group">
							<label class="col-md-4 control-label">Start date</label>
							<div class="col-md-6">
  								<input type="date" name="start_date" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">End date</label>
							<div class="col-md-6">
  								<input type="date" name="end_date" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Affiliation</label>
							<div class="col-md-6">
								<select name="aff_id" class="form-control">
									@foreach($affs as $aff)
									<option value="{{$aff->aff_id}}" class="form-control">{{$aff->name}}</option>
									@endforeach
								</select>
							</div>

						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Create
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
