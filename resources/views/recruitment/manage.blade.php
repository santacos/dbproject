@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">


					<h3>Member</h3>
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
				      			
									<a href="{{ url('/recruitment/invite?id='.$rec_id.'&&mid='.$user->id) }}" class="btn btn-warning">invite</a>
				      			</td>
					        </tr>
					        @endforeach
					    </tbody>
				    </table>

					<h3>current user:</h3> {{$cur_user->id}}
   				</div>
			</div>
		</div>
	</div>
</div>
@endsection
