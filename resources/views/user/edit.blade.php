@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Edit Profile: {{ $user->firstname }} {{ $user->lastname }} <small>({{ $user->nickname }})</small></h1>
			
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title">edit your profile</h3>
				</div><!-- /.box-header -->
				<div class="register-box-body">
					<form class="form-horizontal" role="form" method="POST">
						<div class='row'>
							<div class='col-xs-4 col-xs-offset-1'>
								<div class="form-group has-feedback">
									<label>About</label>
									<textarea class="form-control" rows="3" placeholder="describe yourself"></textarea>
								</div>
								<div class="form-group has-feedback">
									<label>Nick name</label>
									<input type="text" class="form-control" name="nickname" value="" placeholder={{$user->nickname}}>
									<span class="glyphicon glyphicon-user form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label>E-mail</label>
									<input type="email" class="form-control" name="email" value="" placeholder={{$user->email}}>
									<span class="glyphicon glyphicon-envelope form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">
									<label>Mobile No.</label>
									<input type="tel" class="form-control" name="telnumber" value="" placeholder={{$user->tel}}>
									<span class="glyphicon glyphicon-phone form-control-feedback"></span>
								</div>

							</div>
							<div class='col-xs-4 col-xs-offset-2' style='position:relative; top:5em;'>							

								<div class="form-group has-feedback">
									<label>New Password</label>
									<input type="password" class="form-control" name="cur_password" placeholder="type your current password">
									<span class="glyphicon glyphicon-lock form-control-feedback"></span>
								</div>
								<div class="form-group has-feedback">									
									<input type="password" class="form-control" name="cur_password" placeholder="type your new password">
									<span class="glyphicon glyphicon-lock form-control-feedback"></span>
								</div>

								<div class="form-group has-feedback">
									<input type="password" class="form-control" name="password_confirmation" placeholder="Retype your new password">
									<span class="glyphicon glyphicon-log-in form-control-feedback"></span>
								</div>


							</div>
						</div>
						<div class="row row-centered">
							<div class="col-xs-6 col-xs-offset-3">
								<button type="submit" class="btn btn-primary btn-block btn-flat">Confirm</button>
							</div><!-- /.col -->
						</div>

					</form>	
					
				</div>
			</div>
		</div>
	</div>
</div>

@endsection
