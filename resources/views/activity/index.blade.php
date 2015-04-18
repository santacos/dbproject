@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					
					<a href="{{url('/activity/create')}}" class="btn btn-info" style="margin-bottom:1em;">Create new activity</a>
					<table class="table table-bordered table-hover">
					    <thead>
					        <tr>
					          <th>#</th>
					          <th>Name</th>
					          <th>Detail</th>
					          <th>Start Date</th>
					          <th>End Date</th>
					          <th>Affiliation</th>
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
					          <td>{{$activity->aff_name}}</td>
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
