<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="#" class="media-left"><img src="/assets/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i>
									</div>
								</div>

								<div class="media-right media-middle">
									<ul class="icons-list">
										<li>
											<a href="#"><i class="icon-cog3"></i></a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="active"><a href="{{ url('dashboard')}}"><i class="icon-home4"></i> <span>Dashboard</span></a></li>

								<li>
									<a href="#"><i class="icon-paypal2"></i> <span>Transaction</span></a>
									<ul>
										<li><a href="#">Transaction</a></li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-paypal2"></i> <span>Saldo</span></a>
									<ul>
										<li><a href="#">Saldo</a></li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-location4"></i> <span>Location</span></a>
									<ul>
										<li><a href="{{ url('location')}}"> Manage Location</a></li>
									</ul>
								</li>

								<li>
									<a href="#"><i class="icon-map5"></i> <span>Maps</span></a>
									<ul>
										<li><a href="#">Maps</a></li>
									</ul>
								</li>
							@if(Auth::check())
							@can('superadmin-access')
								
								<li>
									<a href="#"><i class="icon-gear"></i> <span>Manage User</span></a>
									<ul>
										<li><a href="{!! url('manage') !!}">Manage User</a></li>
									</ul>
								</li>
							@endcan
							@endif
								<!-- /forms -->

								<!-- Appearance -->
								
								<!-- /appearance -->
								<!-- Tables -->
								
								<!-- /page kits -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->
