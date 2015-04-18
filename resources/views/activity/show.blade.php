@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<table class="table table-bordered table-hover">
					    <thead>
					        <tr>
					          <th>Name</th>
					          <th>Detail</th>
					          <th>Start Date</th>
					          <th>End Date</th>
					          <th>Affiliation</th>
					          <th>Create by</th>
					        </tr>
					    </thead>
					    <?php $i=0 ?>
					    <tbody>
					        <tr>
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
					        </tr>
					    </tbody>
				    </table>
					
   				</div>
			</div>
		</div>
	</div>
</div>
@endsection
