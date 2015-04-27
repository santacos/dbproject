@extends('app')

@section('content')
<div class="container-fluid">
	<h1>
		สร้างฝ่ายใหม่ในระบบ
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
			<form role="form" method="POST" action="{{ url('/newdept/') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">
				<div class="box-body">
					<div class="form-group">
						<label>ชื่อฝ่าย</label>
						<input type="text" class="form-control" name="name">
					</div>


					<div class="form-group">
						<label>รายละเอียดฝ่าย</label>
						<textarea name="default_detail" class="form-control" rows="3"></textarea>
					</div>

				</div>
				<div class="box-footer">
					<button type="submit" class="btn btn-success btn-lg col-md-12">สร้างฝ่ายใหม่</button>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
