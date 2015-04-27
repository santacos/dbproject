@extends('app')

@section('active_3')
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
				</div>
					<div class="box">
						@if(count($deps) > 0)
						<div class="box-body table-responsive no-padding">
							<table class="table table-bordered table-hover">
								<thead>
									<tr>
										<th>#</th>
										<th>Name</th>
										<th>Detail</th>
										<th>Department</th>
										<th>Start Date</th>
										<th>End Date</th>
										<th>Affiliation</th>
										<!-- <th>Create by</th> -->
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
