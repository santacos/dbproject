@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-success">
				<div class="panel-heading">All activity</div>

				<div class="panel-body">
					@if(count($message) > 0)
					<div class="alert alert-success" role="alert">{{$message}}</div>
					@endif
					
					<a href="{{url('/activity/create')}}" class="btn btn-info" style="margin-bottom:1em;">Create new activity</a>
					<a href="{{url('/youractivity')}}" class="btn btn-warning" style="margin-bottom:1em;">your activity</a>
					
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
									<a href="{{url('activity/'.$activity->act_id)}}" class="btn btn-primary">view</a>
				      				<a href="{{url('adddepart/create?id='.$activity->act_id)}}" class="btn btn-info">Dep</a>
								</td>
					        </tr>
					        @endforeach
					    </tbody>
				    </table>
					
   				</div>
			</div>
		</div>
	</div>
</div>
@endsection
