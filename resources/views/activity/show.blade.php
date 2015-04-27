@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">กิจกรรม</div>

				<div class="panel-body">
					<h3>รายละเอียดกิจกรรม : {{$activity->name}}</h3>
					<hr>
					<table class="table table-bordered table-hover">
					    <tbody>
					        <tr>
					        	<th>ชื่อกิจกรรม</th>
					          	<td>{{$activity->name}}</td>
					        </tr>
					        <tr>
					        	<th>รายละเอียดกิจกรรม</th>
					           	<td>{{$activity->detail}}</td>
					        </tr>
					        <tr>
					        	<th>วันเริ่มต้นกิจกรรม</th>
					          	<td>{{$activity->start_date}}</td>
					        </tr>
					        <tr>
					        	<th>วันสิ้นสุดกิจกรรม</th>
					          	<td>{{$activity->end_date}}</td>
					        </tr>
					        <tr>
					        	<th>สังกัด</th>
					          	<td>{{$activity->affiliation->name}}</td>
					        </tr>
					        <tr>
					        	<th>ผู้สร้าง</th>
					          	<td>
					          		@foreach($activity->user as $man)
					          		{{$man->username}} <br>
					          		@endforeach
					      		</td>
					      	</tr>
					    </tbody>
				    </table>
					<hr>
					<h3>รายละเอียดฝ่ายในกิจกรรม</h3>	
			    	<table class="table table-stribed table-hover">
			    		<thead>
			    			<th>ชื่อฝ่าย</th>
			    			<th>รายละเอียดฝ่าย</th>
			    			<th>จำนวนคนปัจุบัน</th>
			    			<th>จำนวนรับต่ำสุด</th>
			    			<th>จำนวนรับสูงสุด</th>
			    			<!-- <th>Action</th> -->
			    		</thead>
			    		<tbody>
			    			@foreach($recDBs as $recDB)
			    			<tr>
			    				<td>{{$recDB->department->name}}</td>
			    				<td style="width:30%;">{{$recDB->edited_dep_detail}}</td>
			    				<td>{{$recDB->current_num}}</td>
			    				<td>{{$recDB->min_num}}</td>
			    				<td>{{$recDB->max_num}}</td>
			    				<!-- <td> <a class="btn btn-success btn-sm">Edit</a>
			    					<a href="{{url('recruitment/addmember?id='.$recDB->rec_id)}}" class="btn btn-warning btn-sm">manage</a>
			    				</td> -->
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
