@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<h1>Profile: {{ $user->firstname }} {{ $user->lastname }} <small>({{ $user->nickname }})</small></h1>
			
			<div class="box box-primary">
				<div class="box-header">
					<h3 class="box-title"></h3>
				</div><!-- /.box-header -->

				<div class="col-md-6">
					<div class="box-body">
						<div class="info-box">
							<span class="info-box-icon bg-yellow"><i class="fa fa-files-o"></i></span>
							<div class="info-box-content">
								<span class="info-box-number">ABOUT</span>
								<span class="info-box-text">กูเทพมาก</span>
							</div><!-- /.info-box-content -->
						</div>
					</div><!-- /.box-body -->
				</div>

				<div class="col-md-6">
				<div class="box-body">
					<div class="info-box">
						<span class="info-box-icon bg-aqua"><i class="fa fa-envelope-o"></i></span>
						<div class="info-box-content">
						<span class="info-box-number">Contact</span>
						<span class="info-box-number">Email: {{ $user->email }}</span>
						<span class="info-box-number">Mobile No.: {{ $user->tel }}</span>
						</div><!-- /.info-box-content -->
					</div>
					</div>
				</div>
				

				

				<div class="box-footer">
					<div class="box">
				<div class="box-header">
					<h3 class="box-title">รายชื่อกิจกรรมที่เคยเข้าร่วม</h3>
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
							<tr>
								<!-- Put activities data here -->
							</tr>
						</tbody>
					</table>
				</div><!-- /.box-body -->
			</div><!-- /.box -->
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
