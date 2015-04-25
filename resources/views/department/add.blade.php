@extends('app')

@section('libs')
	

	<script src="{{ asset('vendor/angular.min.js')}}"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.0rc1/angular-route.min.js"></script>

	<script src="{{asset('js/createdep.js')}}"></script>
@endsection

@section('content')
<div class="container" ng-app="inputExample" ng-controller="ExampleController">
	count :: @{{count}} <br>
	depSelected : @{{depSelected.dep_id}} <br>
	@{{departments}}
	<div class="row" ng-init="act_id={{$activity->act_id}}">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-success">
				<div class="panel-heading">Add department</div>
				<div class="panel-body">
					<a href="{{url('/activity/'.$activity->act_id.'/edit')}}" class="btn btn-info" style="margin-bottom:1em;">Edit this activity</a>
					<a href="{{url('/activity')}}" class="btn btn-success" style="margin-bottom:1em;">All activity</a>
					<a href="{{url('/youractivity')}}" class="btn btn-warning" style="margin-bottom:1em;">your activity</a>
					
					<h3>รายละเอียดกิจกรรม : {{$activity->name}}</h3>
					<hr>
					<table class="table table-bordered table-hover">
					    <tbody>
					        <tr>
					        	<th>Name</th>
					          	<td>{{$activity->name}}</td>
					        </tr>
					        <tr>
					        	<th>Detail</th>
					           	<td>{{$activity->detail}}</td>
					        </tr>
					        <tr>
					        	<th>Start Date</th>
					          	<td>{{$activity->start_date}}</td>
					        </tr>
					        <tr>
					        	<th>End Date</th>
					          	<td>{{$activity->end_date}}</td>
					        </tr>
					        <tr>
					        	<th>Affiliation</th>
					          	<td>{{$activity->affiliation->name}}</td>
					        </tr>
					        <tr>
					        	<th>Create by</th>
					          	<td>
					          		@foreach($activity->user as $man)
					          		{{$man->username}} <br>
					          		@endforeach
					      		</td>
					      	</tr>
					      	<tr>
					      		<th>Action</th>
					      		<td>
					      			<a href="{{url('activity/'.$activity->act_id)}}" class="btn btn-info">view</a>
					      		</td>
					        </tr>
					    </tbody>
				    </table>

				    <div ng-show="count>0">
				    	<h3>รายละเอียดฝ่ายในกิจกรรม</h3>	
				    	<table class="table table-stribed table-hover">
				    		<thead>
				    			<th>Name</th>
				    			<th>Detail</th>
				    			<th>Min num</th>
				    			<th>Max num</th>
				    			<th>Action</th>
				    		</thead>
				    		<tbody>
				    			@foreach($recDBs as $recDB)
				    			<tr>
				    				<td>{{$recDB->department->name}}</td>
				    				<td>{{$recDB->edited_dep_detail}}</td>
				    				<td>{{$recDB->min_num}}</td>
				    				<td>{{$recDB->max_num}}</td>
				    				<td> <a class="btn btn-success btn-sm">Edit</a>
				    					<!-- <a class="btn btn-success btn-sm" ng-click="editDepart(dep)">edit</a> -->
				    				</td>
								</tr>
				    			@endforeach
				    			<tr ng-repeat="dep in departments">
				    				<td ng-bind="dep.name"></td>
				    				<td ng-bind="dep.detail"></td>
				    				<td ng-bind="dep.min_num"></td>
				    				<td ng-bind="dep.max_num"></td>
				    				<td> <a class="btn btn-danger btn-sm" ng-click="removefromdepart(dep)">remove</a>
				    					<!-- <a class="btn btn-success btn-sm" ng-click="editDepart(dep)">edit</a> -->
				    				</td>
				    			</tr>
				    		</tbody>
				    	</table>
				    	<hr>
				    </div>
				   

				    <h3>เพิ่มฝ่ายที่ต้องการ</h3>
					<hr>

					<form class="form-horizontal" name="myForm" role="form" method="POST" action="{{ url('/adddepart') }}">
						<!-- <input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="count" value="2"> -->

						
						<div class="form-group">
							<label class="col-md-4 control-label">Department:</label>
							<div class="col-md-5">
								<select name="department[@{{count}}][dep_id]" class="form-control" 
								ng-options="depOption.name for depOption in depOptions" ng-model="depSelected"
								ng-change="detailSelected=null">
								  <option value="">-- choose department --</option>
    							</select>
							</div>
							<div class="col-md-3">
								<a  ng-click="getDetail()"class="btn btn-warning">Get default detail</a>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Detail:</label>
							<div class="col-md-5">
		                      	<textarea name="department[@{{count}}][detail]" ng-model="detailSelected"
		                      	class="form-control" rows="3" required></textarea>
		                      	<div class="alert alert-danger" role="alert" ng-show="showWarning"> @{{text}}</div>
		                    </div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Min_num:</label>
							<div class="col-md-2">
								<input type="number" class="form-control" name="min_num" min="1" ng-model="min_num">
		                    </div>
		                    <label class="col-md-1 control-label">Max_num:</label>
							<div class="col-md-2">
								<input type="number" class="form-control" name="max_num" min="1" ng-model="max_num">
		                    </div>
						</div>
						<div class="form-group">
							<div class="col-md-5 col-md-offset-4">
								<a ng-click="addDepart()"class="btn btn-warning" style="width:100%;">
									Add
								</a>
							</div>
						</div>
						<hr>
						<div class="form-group">
							<div class="col-md-3 col-md-offset-9">
								<a ng-click="confirm()"class="btn btn-primary" style="width:100%;">
									Confirm department
								</a>
							</div>
						</div>
						

					</form>


   				</div>
			</div>
		</div>
	</div>
</div>
@endsection
