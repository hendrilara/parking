@extends('layouts.app')

@section('content')

	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li>
				<a href="{{ url('dashboard')}}"><i class="icon-home2 position-left"></i> Home</a>
			</li>
			<li>
				<a href="{{url('location')}}">Data</a>
			</li>
			<li class="active">Location</li>
		</ul>
			</li>
		</ul>
		<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
	</div>

 	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Data Location</h5>
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
			<a href="{!! url('create/location')!!}" class="btn btn-primary" data-popup="tooltip" title="" data-original-title="Create User"><li class="icon-plus-circle2"></li></a>
		</div>

			<table class="table datatable-basic">
				<thead>
					<tr>
						<th>No</th>
						<th>Name</th>
						<th>Address</th>
						<th>Price</th>
						<th>Description</th>
						{{-- <th>Lng</th>
						<th>Lat</th> --}}
						<th>Picture</th>
						<th>Close</th>
						<th>Open</th>
						<th class="text-center">Actions</th>
						{{-- <th>Empty</th>
						<th>Avalible</th> --}}
					</tr>
				</thead>
				<tbody>
				    <?php $no = 1; ?>
					@foreach($location as $value)
						<tr>
							<td>{!! $no !!}</td>
							<td>{!! $value->name !!}</td>
							<th>{!! $value->address!!}</th>
							<th>{!! $value->price!!}</th>
							<th>{!! $value->description!!}</th>
							{{-- <th>{!! $value->lng!!}</th>
							<th>{!! $value->lat!!}</th> --}}

							<td><img src="{{asset($value->image->picture)}}" class="img-circle" alt="" height="50" width="50"></td>
							<td>{!! $value->parking->open_parking !!}</td>
							<td>{!! $value->parking->close_parking !!}</td>

							<td class="text-center">
							<ul class="icons-list">
								<li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown">
										<i class="icon-menu9"></i>
									</a>

									<ul class="dropdown-menu dropdown-menu-right">
									
										<li><a href="{!! url('location/edit/' . $value->id)!!}" class="icon-pencil5" data-popup="tooltip" title="" data-original-title="Edit Location"></a><li>

										<li><a href="{!! url('location/delete/' . $value->id)!!}" class=" icon-trash" data-popup="tooltip" title="" data-original-title="Delete Location"></a></li>

										<li><a href="{!! url('location/detail/' . $value->id)!!}" class="icon-arrow-right6" data-popup="tooltip" title="" data-original-title="Detail Location"></a></li>
								</li>
							</ul>
						</td>
						</tr>
						<?php $no++; ?>
					@endforeach
					
				</tbody>

			</table>

		</div>


@endsection