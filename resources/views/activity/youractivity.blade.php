@extends('app')

@section('active_2')
class="active"
@endsection

@section('content')

<div class="container">
	<section class="contest">
		<div class="row">
			<div class="col-xs-12">
				<div class="col-md-10 col-md-offset-1">
					<div class="row">
					<div class="col-xs-9">
						<h1 style="margin: 0; padding-bottom: 30px;">  Your Activities <small>รายการกิจกรรมทั้งหมดที่ได้เข้าร่วม</small></h1>
					</div>
					<div class="col-xs-3">
						<a href="{{url('/activity/create')}}" class="btn btn-primary btn-lg" style="position:relative;">สร้างกิจกรรมใหม่</a>
					</div>
				</div>
					<div class="box">
						@if(count($activities) > 0)
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
									@foreach($activities as $activity)
									<tr>
										<th scope="row">{{++$i}}</th>
										<td>{{$activity->name}}</td>
										<td>{{$activity->detail}}</td>
										<td>{{$activity->start_date}}</td>
										<td>{{$activity->end_date}}</td>
										<td>{{$activity->affiliation->name}}</td>
										<td>
											@foreach($activity->user as $man)
											{{$man->username}} <br>{{$man->email}}
											@endforeach
										</td>
										<td>
											<a href="{{url('activity/'.$activity->act_id)}}" class="btn btn-info">ดูรายละเอียด</a>
											<a href="{{url('adddepart/create?id='.$activity->act_id)}}" class="btn btn-info">จัดการ</a>
										</td>
									</tr>
									@endforeach
								</tbody>
							</table>
							@else
							<div class="callout callout-danger">
								<h4>You don't have any activity.</h4>
								<p>Click on create new activity to create one.</p>
							</div>
							@endif
						</div>
					</div><!-- /.box-body -->
				</div><!-- /.box -->
			</div>
		</div>
	</section>
</div>

@endsection
