@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1 style="margin: 0; padding-bottom: 30px;">
				คำร้องขอ\คำเชิญ
			</h1>

			<div class="box  box-default box-solid">
				<div class="box-header">
					<h3 class="box-title">คำร้องขอเข้าร่วมกิจกรรมของคุณ</h3>
					
					<div class="box-tools">
						<div class="input-group">
							<input type="text" name="table_search" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search">
							<div class="input-group-btn">
					
								<button class="btn btn-sm btn-default"><i class="fa fa-search"></i></button>
							</div>
						</div>
					</div>
				</div><!-- /.box-header -->
				<div class="box-body table-responsive no-padding">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>Request ID</th>
								<th>กิจกรรม</th>
								<th>ฝ่าย</th>
								<th style="width:35%;">รายละเอียด</th>
								<th>ข้อความ</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@if(count($requestapps)<=0)
								<div class="callout callout-info">
										<h4>คุณไม่มีคำร้องขอเข้ากิจกรรมใดๆ</h4>
										<a href="{{url('activity')}}">คลิกเพื่อดูกิจกรรมที่สนใจ</a></p>
								</div>
								{{$requestapps}}
							@else
								@foreach($requestapps as $app)
								<tr>
									<td>{{$app->app_id}}</td>
									<td>{{$app->recruitment->activity->name}}</td>
									<td>{{$app->recruitment->department->name}}</td>
									<td>{{$app->recruitment->edited_dep_detail}}</td>
									<td>{{$app->message}}</td>
									<td>
										@if($app->status==2)รอการตอบรับ
										@elseif($app->status==0)คำร้องขอถูกปฏิเสธ
										@elseif($app->status==1)คำร้องขอได้รับการอนุมัติ
										@endif
									</td>



								</tr>
								@endforeach
							@endif
						</tbody>
					</table>
				</div><!-- /.box-body -->
			</div>
				
			<div class="box">
				<div class="box box-default box-solid">
	                <div class="box-header with-border">
	                  <h3 class="box-title">คำเชิญจากกิจกรรม</h3>
	                  <div class="box-tools pull-right">
	                    <button class="btn btn-box-tool"></button>
	                  </div><!-- /.box-tools -->
	                </div><!-- /.box-header -->
	                <div class="box-body table-responsive no-padding">
	                	<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th>Request ID</th>
									<th>กิจกรรม</th>
									<th>ฝ่าย</th>
									<th style="width:35%;">รายละเอียด</th>
									<th>ข้อความ</th>
									<th>Action</th>
								</tr>
							</thead>
							<?php $i=0 ?>
							<tbody>
								@if(count($aa)<=0) 
									<div class="callout callout-danger">
										<h4>You don't have any activity.</h4>
										<p>Click on create new activity to create one.</p>
									</div>
								@else
									@foreach($aa as $app)
									<tr>
										<td>{{$app->app_id}}</td>
										<td>{{$app->recruitment->activity->name}}</td>
										<td>{{$app->recruitment->department->name}}</td>
				    					<td>{{$app->recruitment->edited_dep_detail}}</td>
										<td>{{$app->message}}</td>
										<td>
											<a href="{{ url('/recruitment/acceptmem?id='.$app->app_id.'&&st=1') }}" class="btn btn-success">Accept</a>
											<a href="{{ url('/recruitment/acceptmem?id='.$app->app_id.'&&st=0') }}" class="btn btn-danger">Reject</a>
		    					
				    					</td>
									</tr>
									@endforeach
								@endif
							</tbody>
						</table>
	                  
	                </div><!-- /.box-body -->
	            </div>
			</div><!-- /.box -->


		</div>
	</div>
</div>
@endsection
