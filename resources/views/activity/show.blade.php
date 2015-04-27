@extends('app')

@section('active_1')
class="active"
@endsection

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Activity Detail</div>

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
			    			<th>จำนวนผู้เข้าร่วมปัจจุบัน</th>
			    			<th>จำนวนรับต่ำสุด</th>
			    			<th>จำนวนรับสูงสุด</th>
			    			<th></th>
			    		</thead>
			    		<tbody>
			    			@foreach($recDBs as $recDB)
			    			<?php $i=0; ?>
			    			<tr>
			    				<td>{{$recDB->department->name}}</td>
			    				<td style="width:30%;">{{$recDB->edited_dep_detail}}</td>
			    				<td>{{$recDB->current_num}}</td>
			    				<td>{{$recDB->min_num}}</td>
			    				<td>{{$recDB->max_num}}</td>
			    				<td> 
			    					@if($action==1)<a href="{{url('recruitment/addmember?id='.$recDB->rec_id)}}" class="btn btn-success btn-sm">จัดการ</a>
			    					@elseif($action==2)
			    						@if($status[$i]==3)<a href="{{url('recruitment/request?id='.$recDB->rec_id)}}" class="btn btn-warning btn-sm">ขอเข้าร่วม</a>
			    						@elseif($status[$i]==0)<a href="#" class="btn btn-danger btn-sm">คำร้องขอถูกปฏิเสธ</a>
			    						@elseif($status[$i]==1)<a href="#" class="btn btn-success btn-sm">เข้าร่วมกิจกรรมแล้ว</a>
			    						@elseif($status[$i]==2)<a href="#" class="btn btn-default btn-sm">รอการตอบรับ</a>
			    						@endif
			    					@elseif($action==2)<a href="#" class="btn btn-default btn-sm">เข้าร่วมแล้ว</a>
			    					@elseif($action==5)<a href="{{url('auth/login')}}" class="btn btn-info btn-sm">เข้าสู่ระบบเพื่อเข้าร่วม</a>
			    					@endif
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
