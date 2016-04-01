<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Login Administrator</title>
		<!-- Global stylesheets -->
		<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
		{!! Html::style('assets/css/icons/icomoon/styles.css')!!}
		{!! Html::style('assets/css/bootstrap.css')!!}
		{!! Html::style('assets/css/core.css')!!}
		{!! Html::style('assets/css/components.css')!!}
		{!! Html::style('assets/css/colors.css')!!}
		<!-- /global stylesheets -->

	</head>
	<body>

		<div class="navbar navbar-inverse">
		<div class="navbar-header">
			<a class="navbar-brand" href="index.html"><i class="icon-user-tie"> ParkingHere</i></a>

			<ul class="nav navbar-nav pull-right visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->

	<!-- Page container -->
	<div class="page-container login-container">

		<!-- Page content -->
		@yield('content')
		<!-- /page content -->

	</div>
	<!-- /page container -->
		<!-- Core JS files -->
		{!! Html::script('assets/js/plugins/loaders/pace.min.js')!!}
		{!! Html::script('assets/js/core/libraries/jquery.min.js')!!}
		{!! Html::script('assets/js/core/libraries/bootstrap.min.js')!!}
		{!! Html::script('assets/js/plugins/loaders/blockui.min.js')!!}
		<!-- /core JS files -->

		<!-- Theme JS files -->
		{!! Html::script('assets/js/core/app.js')!!}
		<!-- /theme JS files -->
	</body>
</html>