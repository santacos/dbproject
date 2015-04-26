@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Register</div>
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

					<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">UserName</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="username" value="{{ old('username') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Firstname</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Lastname</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Nickname</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nickname" value="{{ old('nickname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Sex</label>
							<div class="col-md-3">
								<input type="radio" name="sex"  value="f">Female
							</div>
							<div class="col-md-3">
								<input type="radio" name="sex" value="m">Male
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Birthdate</label>
							<div class="col-md-6">
								<input type="date" name="birthdate" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">tel</label>
							<div class="col-md-6">
								<input type="text" name="tel" class="form-control">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
<body class="register-page">
	<div class="register-box">
		<div class="register-logo">
			<a href="../../index2.html"><b>Admin</b>LTE</a>
		</div>

		<div class="register-box-body">
			<p class="login-box-msg">Register a new membership</p>
			<form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<label class="col-md-4 control-label">UserName</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="username" value="{{ old('username') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Firstname</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Lastname</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Nickname</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="nickname" value="{{ old('nickname') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Confirm Password</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password_confirmation">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Sex</label>
							<div class="col-md-3">
								<input type="radio" name="sex"  value="f">Female
							</div>
							<div class="col-md-3">
								<input type="radio" name="sex" value="m">Male
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Birthdate</label>
							<div class="col-md-6">
								<input type="date" name="birthdate" class="form-control">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">tel</label>
							<div class="col-md-6">
								<input type="text" name="tel" class="form-control">
							</div>
						</div>


						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Register
								</button>
							</div>
						</div>
					</form>
			<form action="../../index.html" method="post">
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Full name"/>
					<span class="glyphicon glyphicon-user form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="text" class="form-control" placeholder="Email"/>
					<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Password"/>
					<span class="glyphicon glyphicon-lock form-control-feedback"></span>
				</div>
				<div class="form-group has-feedback">
					<input type="password" class="form-control" placeholder="Retype password"/>
					<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
				</div>
				<div class="row">
					<div class="col-xs-8">    
						<div class="checkbox icheck">
							<label>
								<input type="checkbox"> I agree to the <a href="#">terms</a>
							</label>
						</div>                        
					</div><!-- /.col -->
					<div class="col-xs-4">
						<button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
					</div><!-- /.col -->
				</div>
			</form>        

			<div class="social-auth-links text-center">
				<p>- OR -</p>
				<a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign up using Facebook</a>
				<a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Sign up using Google+</a>
			</div>

			<a href="login.html" class="text-center">I already have a membership</a>
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
