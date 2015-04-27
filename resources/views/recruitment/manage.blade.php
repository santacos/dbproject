@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Department Management</div>
				<div class="panel-body">
					<h3>รายชื่อผู้ที่อยู่ในฝ่าย</h3>
					<table class="table table-bordered table-hover">
					    <thead>
					        <tr>
					        	<th>App ID</th>
					          <th>Firstname</th>
					          <th>Lastname</th>
					          <th>Nickname</th>
					          <th>status</th>
					          <th>created_at</th>
					        </tr>
					    </thead>
					    <tbody>
					    	@foreach($inapps as $app)
					        <tr>
					          	<td>{{$app->app_id}}</td>
					          	<td>{{$app->user->firstname}}</td>
					          	<td>{{$app->user->lastname}}</td>
					          	<td>{{$app->user->nickname}}</td>
					          	@if($app->status==0)<td>ปฏิเสธ</td>
					        	@elseif($app->status==1)<td>รับแล้ว</td>
					        	@elseif($app->status==2)<td>รอการตอบรับ</td>
					        	@endif
					        	<td>{{$app->created_at}}</td><!-- 
					        	<td> {{$app->user->id}}</td> -->

					          	
					        </tr>
					        @endforeach
					    </tbody>
				    </table>
				    <hr>

					<h3>ตอบรับคำร้องขอเข้าร่วมฝ่าย</h3>
					<table class="table table-bordered table-hover">
					    <thead>
					        <tr>
					        	<th>App ID</th>
					          <th>Firstname</th>
					          <th>Lastname</th>
					          <th>Nickname</th>
					          <th>status</th>
					          <th>created_at</th>
					          <th>action</th>
					        </tr>
					    </thead>
					    <tbody>
					    	@foreach($requestapps as $app)
					        <tr>
					          	<td>{{$app->app_id}}</td>
					          	<td>{{$app->user->firstname}}</td>
					          	<td>{{$app->user->lastname}}</td>
					          	<td>{{$app->user->nickname}}</td>
					          	@if($app->status==0)<td>ปฏิเสธ</td>
					        	@elseif($app->status==1)<td>รับแล้ว</td>
					        	@elseif($app->status==2)<td>รอการตอบรับ</td>
					        	@endif
					        	<td>{{$app->created_at}}</td>
					        	<td>
					        		<a href="{{ url('/recruitment/accept?id='.$app->app_id.'&&st=1') }}" class="btn btn-success">Accept</a>
					        		<a href="{{ url('/recruitment/accept?id='.$app->app_id.'&&st=0') }}" class="btn btn-danger">Reject</a>
				      			</td>

					          	
					        </tr>
					        @endforeach
					    </tbody>
				    </table>
				    <hr>

				    <h3>ผลการตอบรับคำเชิญที่ส่งไป</h3>
					<table class="table table-bordered table-hover">
					    <thead>
					        <tr>
					        	<th>App ID</th>
					          <th>Firstname</th>
					          <th>Lastname</th>
					          <th>Nickname</th>
					          <th>status</th>
					          <th>created_at</th>
					        </tr>
					    </thead>
					    <tbody>
					    	@foreach($sendapps as $app)
					        <tr>
					          	<td>{{$app->app_id}}</td>
					          	<td>{{$app->user->firstname}}</td>
					          	<td>{{$app->user->lastname}}</td>
					          	<td>{{$app->user->nickname}}</td>
					          	@if($app->status==0)<td>ปฏิเสธ</td>
					        	@elseif($app->status==1)<td>รับแล้ว</td>
					        	@elseif($app->status==2)<td>รอการตอบรับ</td>
					        	@endif
					        	<td>{{$app->created_at}}</td>

					          	
					        </tr>
					        @endforeach
					    </tbody>
				    </table>
				    <hr>



					<h3>เชิญคนเข้าร่วมกิจกรรม</h3>
					<table class="table table-bordered table-hover">
					    <thead>
					        <tr>
					          <th>User ID</th>
					          <th>Firstname</th>
					          <th>Lastname</th>
					          <th>Nickname</th>
					          <th>Year</th>
					          <th>Action</th>
					        </tr>
					    </thead>
					    <tbody>
					    	@foreach($newusers as $user)
					        <tr>
					          	<th scope="row">{{$user->id}}</th>
					          	<td>{{$user->firstname}}</td>
					         	<td>{{$user->lastname}}</td>
					          	<td>{{$user->nickname}}</td>
					          	<td>{{$user->year}}</td>
					      		<td>
									<a href="{{ url('/user/profile/'.$user->id) }}" class="btn btn-primary">view profile</a>
				      			
									<a href="{{ url('/recruitment/invite?id='.$rec_id.'&&mid='.$user->id) }}" class="btn btn-warning">invite</a>
				      			</td>
					        </tr>
					        @endforeach
					    </tbody>
				    </table>
				    <hr>
   				</div>
			</div>
		</div>
	</div>
</div>
@endsection
