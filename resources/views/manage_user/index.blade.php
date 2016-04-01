@extends('layouts.app')

@section('content')

	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li>
				<a href="index.html"><i class="icon-home2 position-left"></i> Home</a>
			</li>
			<li>
				<a href="form_inputs_basic.html">Forms</a>
			</li>
			<li class="active">Basic inputs</li>
		</ul>
			</li>
		</ul>
		<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
	</div>

 	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Data User</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
		</div>

		{{-- <div class="panel-body">
			Example of a fully <code>bordered</code> table. Here we have both vertical and horizontal borders displayed. All borders have the same color, table <code>head</code> is visually divided from the table <code>body</code> with a bit darker border color. To use this layout add <code>.table-bordered</code> class to the table with <code>.table</code> class.
		</div> --}}

		<div class="panel-body">
			<a href="{!! url('create')!!}" class="btn btn-primary" data-popup="tooltip" title="" data-original-title="Create User"><li class="icon-plus-circle2"></li></a>
		</div>
		
		
			<table class="table datatable-basic">
				<thead>
					<tr>
						<th>No</th>
						<th>Username</th>
						<th>Avatar</th>
						<th>Email</th>
						<th>Role</th>
						<th class="text-center">Actions</th>
					</tr>
				</thead>
				<tbody>
				  <?php $no = 1; ?>
					@foreach($user as $value)
						<tr>
							<td>{!! $no !!}</td>
							<td>{!! $value->name !!}</td>
							<td><img src="{{asset($value->avatar)}}" class="img-circle" alt="" height="50" width="50"></td>
							<td>{!! $value->email !!}</td>
							<td>{!! $value->role !!}</td>
							<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-right">
										<li><a href="{!! url('user/edit/' . $value->id)!!}" class="icon-pencil5" data-popup="tooltip" title="" data-original-title="Edit User"></a></li>

							
										<li><a href="{!! url('admin/delete/' . $value->id)!!}" class=" icon-trash" data-popup="tooltip" title="" data-original-title="Delete User"></a></li>
								
									</ul>
								</li>
							</ul>
						</td>
						</tr>
					<?php $no++; ?>
					@endforeach
				</tbody>

			</table>
		</div>
	
	
					<!-- /both borders -->
@endsection