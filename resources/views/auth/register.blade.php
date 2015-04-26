@extends('app')

@section('content')
<body class="register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="#"><b>Activity</b>DB</a>
		</div>

		<div class="register-box-body">
			<p class="login-box-msg">Register a new membership</p>
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
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="username" value="{{ old('username') }}" placeholder="Username"/>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}" placeholder="Firstname"/>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Lastname"/>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="text" class="form-control" name="nickname" value="{{ old('nickname') }}" placeholder="Nickname"/>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email"/>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password" placeholder="Password"/>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<input type="password" class="form-control" name="password_confirmation" placeholder="Retype password"/>
					<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				</div>

				<div class="form-group has-feedback">
					<label class="col-md-3 control-label">Sex</label>
					<input type="radio" name="sex" value="m"> Male
					<input type="radio" name="sex"  value="f"> Female
				</div>

				<div class="form-group has-feedback">
					<label class="col-md-4 control-label">Birthdate</label>
					<div class="col-md-8">
						<input type="date" name="birthdate" class="form-control">
					</div>
				</div>

				<div class="form-group has-feedback">
					<input type="text" name="tel" class="form-control" placeholder="Mobile No."/>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>

				<div class="row">
					<div class="col-xs-12">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
					</div><!-- /.col -->
				</div>

			</form>

			<a href="{{ url('/auth/login') }}" class="text-center">I already have a membership</a>
		</div><!-- /.form-box -->
	</div><!-- /.register-box -->

	<!-- jQuery 2.1.3 -->
	<script src="{{ asset('/plugins/jQuery/jQuery-2.1.3.min.js') }}"></script>
	<!-- Bootstrap 3.3.2 JS -->
	<script src="{{ asset('/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
	<!-- iCheck -->
	<script src="{{ asset('/plugins/iCheck/icheck.min.js') }}" type="text/javascript"></script>
	<script>
		$(function () {
			$('input').iCheck({
				checkboxClass: 'icheckbox_square-blue',
				radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
      });
		});
	</script>
</body>
@endsection
