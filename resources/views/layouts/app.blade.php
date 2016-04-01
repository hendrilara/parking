<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Administrator</title>
		<!-- Global stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		{!! Html::style('assets/css/icons/icomoon/styles.css') !!}
		{!! Html::style('assets/css/bootstrap.css') !!}
		{!! Html::style('assets/css/core.css') !!}
		{!! Html::style('assets/css/components.css') !!}
		{!! Html::style('assets/css/colors.css') !!}
		<!-- /global stylesheets -->
		
	</head>
	<body>

		@include('includes.navbar')

		
		@include('includes.sidebar')

			<div class="content-wrapper">

				<!-- Content area -->
				<div class="content">

					@yield('content')

				<!-- /dashboard content -->

				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->

		<!-- Core JS files -->
		{!! Html::script('assets/js/plugins/loaders/pace.min.js') !!}
		{!! Html::script('assets/js/core/libraries/jquery.min.js') !!}
		{!! Html::script('assets/js/core/libraries/bootstrap.min.js') !!}
		{!! Html::script('assets/js/plugins/loaders/blockui.min.js') !!}
		{!! Html::script('assets/js/plugins/visualization/d3/d3.min.js') !!}
		{!! Html::script('assets/js/plugins/visualization/d3/d3_tooltip.js') !!}
		{!! Html::script('assets/js/plugins/forms/styling/switchery.min.js') !!}
		{!! Html::script('assets/js/plugins/forms/styling/uniform.min.js') !!}
		{!! Html::script('assets/js/plugins/forms/selects/bootstrap_multiselect.js') !!}
		{!! Html::script('assets/js/plugins/ui/moment/moment.min.js') !!}
		{!! Html::script('assets/js/plugins/pickers/daterangepicker.js') !!}
		{!! Html::script('assets/js/core/app.js') !!}
			<!-- /basic datatable -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->


		{!! Html::script('assets/js/pages/dashboard.js') !!}
		<!-- /theme JS files -->
	</body>
</html>