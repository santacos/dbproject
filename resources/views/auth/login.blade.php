@extends('appguest')

@section('contentforguest')

<body class="login-page">
	
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Activity</b>DB</a>
    </div><!-- /.login-logo -->
    <div class="login-box-body">
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
   <p class="login-box-msg">Sign in to start your session</p>
   <form action="{{ url('/auth/login') }}" method="post">
     <input type="hidden" name="_token" value="{{ csrf_token() }}">
     <div class="form-group has-feedback">
      <input type="text" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"/>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" class="form-control" placeholder="Password" name="password"/>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-8">    
        <div class="checkbox icheck">
          <label class="">
            <div class="icheckbox_square-blue" aria-checked="false" aria-disabled="false" style="position: relative;"><input type="checkbox" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"><ins class="iCheck-helper" style="position: absolute; top: -20%; left: -20%; display: block; width: 140%; height: 140%; margin: 0px; padding: 0px; border: 0px; opacity: 0; background: rgb(255, 255, 255);"></ins></div> Remember Me
          </label>
        </div>                        
      </div>
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
      </div><!-- /.col -->
    </div>
  </form>

  <a href="{{ url('/password/email') }}">I forgot my password</a><br>
  <a href="{{ url('/auth/register') }}" class="text-center">Register a new membership</a>

</div><!-- /.login-box-body -->
</div><!-- /.login-box -->
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
