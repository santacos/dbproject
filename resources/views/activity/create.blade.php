@extends('app')

@section('content')
<div class="container-fluid">
	<h1>
		สร้างกิจกรรมใหม่
	</h1>
	<div class="col-md-8 col-md-offset-2">
		<div class="box box-primary">
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
			<div class="box-header">
				<h3 class="box-title">แบบฟอร์มสร้างกิจกรรม</h3>
			</div><!-- /.box-header -->
			
			<!-- form start -->
			<form role="form" method="POST" action="{{ url('/activity') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="box-body">
					<div class="form-group">
						<label>ชื่อกิจกรรม</label>
						<input type="text" class="form-control" name="name" value="{{ old('name') }}">
					</div>


					<div class="form-group">
						<label>รายละเอียดกิจกรรม</label>
						<textarea name="detail" class="form-control" rows="3"></textarea>
					</div>

					<div class="row">
						<div class="form-group col-md-6">
							<label>วันเริ่มต้นทำกิจกรรม</label>
							<input type="date" name="start_date" class="form-control">
						</div>
						<div class="form-group col-md-6">
							<label>วันสิ้นสุดกิจกรรม</label>
							<input type="date" name="end_date" class="form-control">
						</div>
					</div>
					

					

					<div class="form-group">
						<label>สังกัดของกิจกรรม</label>
						<select name="aff_id" class="form-control">
							@foreach($affs as $aff)
							<option value="{{$aff->aff_id}}" class="form-control">{{$aff->name}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-success btn-lg col-md-12">สร้างกิจกรรม</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
