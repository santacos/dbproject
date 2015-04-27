@extends('app')

@section('active_1')
class="active"
@endsection
@section('content')

<section class="content">
	<h1>
		All activities
		<small>รายการกิจกรรมทั้งหมดที่สามารถเข้าร่วมได้</small>
	</h1>

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			

			<div class="input-group">
				<div class="col-md-2">
					<select class="form-control">
						<option>ทุกฝ่าย</option>
					</select>
				</div>
				<div class="col-md-4">
					<input type="text" name="table_search" class="form-control" placeholder="ชื่อกิจกรรมที่ต้องการค้นหา">

				</div>
				<div class="col-md-2">
					<div class="input-group-btn">

						<button class="btn btn-default"><i class="fa fa-search"></i></button>
					</div>
				</div>
				
			</div>
			<br>
			<div class="box">
				<div class="box-body table-responsive no-padding">
					<table class="table table-bordered table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>ชื่อกิจกรรม</th>
								<th>รายละเอียด</th>
								<th>วันเริ่มทำกิจกรรม</th>
								<th>วันสิ้นสุดทำกิจกรรม</th>
								<th>สังกัด</th>
								<th>สร้างโดย</th>
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
									{{$man->username}} <br>
									@endforeach
								</td>
								<td>
									<a href="{{url('activity/'.$activity->act_id)}}" class="btn btn-primary">ดูรายละเอียด</a>
								</td>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
		</div>
	</div>
</section>
</div>


@endsection
