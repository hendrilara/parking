@extends('layouts.app')

@section('content')
	
	<!-- Basic datatable -->
	<div class="panel panel-flat">
		<div class="panel-heading">
			<h5 class="panel-title">Basic datatable</h5>
			<div class="heading-elements">
				<ul class="icons-list">
            		<li><a data-action="collapse"></a></li>
            		<li><a data-action="reload"></a></li>
            		<li><a data-action="close"></a></li>
            	</ul>
        	</div>
		</div>

		<div class="panel-body">
			
		</div>

		<table class="table datatable-basic">
			<thead>
				<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Job Title</th>
					<th>DOB</th>
					<th>Status</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Marth</td>
					<td><a href="#">Enright</a></td>
					<td>Traffic Court Referee</td>
					<td>22 Jun 1972</td>
					<td><span class="label label-success">Active</span></td>
					<td class="text-center">
						<ul class="icons-list">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">
									<i class="icon-menu9"></i>
								</a>

								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#"><i class="icon-file-pdf"></i> Export to .pdf</a></li>
									<li><a href="#"><i class="icon-file-excel"></i> Export to .csv</a></li>
									<li><a href="#"><i class="icon-file-word"></i> Export to .doc</a></li>
								</ul>
							</li>
						</ul>
					</td>
				</tr>
				
			</tbody>
		</table>
	</div>
	
	<!-- /basic datatable -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->

@endsection