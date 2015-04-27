@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Profile: {{ $user->firstname }} {{ $user->lastname }} <small>({{ $user->nickname }})</small></h1>
			
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"></h3>
				</div><!-- /.box-header -->

				<div class="col-md-12">
					<div class="box-body">
					<div class="info-box">
			            <span class="info-box-icon bg-green"><i class="fa fa-fw fa-user"></i></span>
			            <div class="info-box-content">
			              <span class="info-box-number">
			              	<b>Firstname: </b>{{ $user->firstname }} <br>
			              	<b>Lastname: </b>{{ $user->lastname }} <br>
			              	<b>Nickname: </b>{{ $user->nickname }} <br>
			              </span>
			            </div><!-- /.info-box-content -->
		          	</div>
		          </div>


				</div>

				<div class="col-md-6">
					<div class="box-body">
						<div class="info-box">
							<span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
							<div class="info-box-content">
								<span class="info-box-number">ABOUT</span>
								<span class="info-box-text">
									@if(is_null($student)) ไม่มีคำแนะนำตัว
									@else {{$student->description}}
									@endif
								</span>
							</div><!-- /.info-box-content -->
						</div>
					</div><!-- /.box-body -->
				</div>

				<div class="col-md-6">
				<div class="box-body">
					<div class="info-box">
						<span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
						<div class="info-box-content">
						<span class="info-box-number">Contact</span>
						<span class="info-box-number">Email: {{ $user->email }}</span>
						<span class="info-box-number">Mobile No.: {{ $user->tel }}</span>
						</div><!-- /.info-box-content -->
					</div>
					</div>
				</div>
				

				

				<div class="box-footer">
					<div class="box">
				<div class="box-header">
					<h3 class="box-title">รายชื่อกิจกรรมที่เคยเข้าร่วม</h3>
				</div><!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Name</th>
								<th>Detail</th>
								<th>Start Date</th>
								<th>End Date</th>
								<th>Affiliation</th>
								<th>Create by</th>
								<td>Action</td>
							</tr>
						</thead>
						<?php $i=0 ?>
						<tbody>
							@foreach($deps as $dep)
								<tr>
									<th scope="row">{{++$i}}</th>
									<td>{{$dep->activity->name}}</td>
									<td>{{$dep->activity->detail}}</td>
									<td>{{$dep->department->name}}</td>
									<td>{{$dep->activity->start_date}}</td>
									<td>{{$dep->activity->end_date}}</td>
									<td>{{$dep->activity->affiliation->name}}</td>
								<!-- 	<td>
										@foreach($dep->activity->user as $man)
										{{$man->username}} <br>{{$man->email}}
										@endforeach
									</td> -->
									<td>
										<a href="{{url('activity/'.$dep->activity->act_id)}}" class="btn btn-info">ดูรายละเอียด</a>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
