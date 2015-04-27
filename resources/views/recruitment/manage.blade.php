@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">{{ $activity->name }}<i class="fa fa-fw fa-arrow-right"></i>{{ $dept->name }}<i class="fa fa-fw fa-arrow-right"></i>จัดการฝ่าย</div>
				<div class="panel-body">

					<div class="row">
						<div class="col-xs-8">
							<div class="box box-solid box-info">
								<div class="box-header with-border">
									<i class="fa fa-info-circle"></i>
									<h3 class="box-title">รายละเอียดฝ่าย</h3>
								</div><!-- /.box-header -->
								<div class="box-body">
									<p>
										{{ $rec->edited_dep_detail }}
									</p>
								</div><!-- /.box-body -->
							</div>
						</div>
						<div class="col-xs-4">
							<div class="info-box bg-yellow">
								<span class="info-box-icon"><i class="ion ion-ios-people-outline"></i></span>
								<div class="info-box-content">
									<span class="info-box-text">จำนวนสมาชิกของฝ่าย</span>
									<span class="info-box-number">{{ $rec->current_num }}/{{ $rec->max_num }} (ขั้นต่ำ: {{ $rec->min_num }})</span>
									<div class="progress">
										<div class="progress-bar" style="width: {{ $percent }}%"></div>
									</div>
									<span class="progress-description">
										{{ $percent }}% จากจำนวนสูงสุดที่รับได้
									</span>
								</div><!-- /.info-box-content -->
							</div>
						</div>
					</div>
					
					<div class="nav-tabs-custom">
						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">รายชื่อผู้ที่อยู่ในฝ่าย</a></li>
							<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">ตอบรับคำร้องขอเข้าร่วมฝ่าย</a></li>
							<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">ผลการตอบรับคำเชิญที่ส่งไป</a></li>
							<li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">เชิญคนเข้าร่วมกิจกรรม</a></li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="tab_1">
								<h3>รายชื่อผู้ที่อยู่ในฝ่าย</h3>
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>ชื่อจริง</th>
											<th>นามสกุล</th>
											<th>ชื่อเล่น</th>
											<th>เข้าร่วมเมื่อ</th>
										</tr>
									</thead>
									<tbody>
										@foreach($inapps as $app)
										<tr>
											<td>{{$app->user->firstname}}</td>
											<td>{{$app->user->lastname}}</td>
											<td>{{$app->user->nickname}}</td>
											<td>{{$app->created_at}}</td>

										</tr>
										@endforeach
									</tbody>
								</table>
							</div><!-- /.tab-pane -->
							<div class="tab-pane" id="tab_2">
								<h3>ตอบรับคำร้องขอเข้าร่วมฝ่าย</h3>
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>ผู้ส่งคำร้องขอเข้าร่วมฝ่าย</th>
											<th>สถานะ</th>
											<th>ส่งเมื่อ</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($requestapps as $app)
										<tr>
											<td>{{$app->user->firstname}} {{$app->user->lastname}}</td>
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
							</div><!-- /.tab-pane -->
							<div class="tab-pane" id="tab_3">
								<h3>ผลการตอบรับคำเชิญที่ส่งไป</h3>
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>ชื่อจริง</th>
											<th>นามสกุล</th>
											<th>ชื่อเล่น</th>
											<th>สถานะ</th>
											<th>อัพเดทเมื่อ</th>
										</tr>
									</thead>
									<tbody>
										@foreach($sendapps as $app)
										<tr>
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
							</div><!-- /.tab-pane -->
							<div class="tab-pane" id="tab_4">
								<h3>เชิญคนเข้าร่วมกิจกรรม</h3>
								<table class="table table-bordered table-hover">
									<thead>
										<tr>
											<th>ชื่อจรีิง</th>
											<th>นามสกุล</th>
											<th>ชื่อเล่น</th>
											<th>ชั้นปี</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($newusers as $user)
										<tr>
											<td>{{$user->firstname}}</td>
											<td>{{$user->lastname}}</td>
											<td>{{$user->nickname}}</td>
											<td>{{$user->year}}</td>
											<td>
												<a href="{{ url('/user/profile/'.$user->id) }}" class="btn btn-primary">View profile</a>

												<a href="{{ url('/recruitment/invite?id='.$rec_id.'&&mid='.$user->id) }}" class="btn btn-warning">Invite</a>
											</td>
										</tr>
										@endforeach
									</tbody>
								</table>
							</div><!-- /.tab-pane -->
						</div><!-- /.tab-content -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
