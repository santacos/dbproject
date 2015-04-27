@extends('app')

@section('active_1')
class="active"
@endsection
@section('content')

<section class="content">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1 style="margin: 0; padding-bottom: 30px;">
				Search ค้นหาคำว่า :
				<small>{{$word}}</small>
			</h1>
			<div class="box">
				<div class="box-header">
					<h3 class="box-title">ตารางรายชื่อกิจกรรม</h3>
					
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
