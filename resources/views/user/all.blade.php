@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					<h3>All user</h3>
					<table class="table table-bordered table-hover">
					    <thead>
					        <tr>
					          <th>#</th>
					          <th>Firstname</th>
					          <th>Lastname</th>
					          <th>Nickname</th>
					          <th>Year</th>
					          <th>Action</th>
					        </tr>
					    </thead>
					    <?php $i=0 ?>
					    <tbody>
					    	@foreach($users as $user)
					        <tr>
					          	<th scope="row">{{$user->id}}</th>
					          	<td>{{$user->firstname}}</td>
					         	<td>{{$user->lastname}}</td>
					          	<td>{{$user->nickname}}</td>
					          	<td>{{$user->year}}</td>
					      		<td>
									<a href="#" class="btn btn-primary">view profile</a>
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
