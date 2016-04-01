@extends('layouts.app')
<style>
	#map-canvas{
		width: 100%;
		border-radius: 4px;
		height: 250px;
	}
</style>
{{-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css"> --}}
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q&libraries=places"
  type="text/javascript"></script>
@section('content')

	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li>
				<a href="{{ url('dashboard')}}"><i class="icon-home2 position-left"></i> Home</a>
			</li>
			<li>
				<a href="{{ url('location')}}">Create</a>
			</li>
			<li class="active">Location</li>
		</ul>
			</li>
		</ul>
		<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
	</div>

		<!-- Form horizontal -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Create Location Parking</h5>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">
	

				 {!!Form::open( [ 'url' => 'location/store', 'method' => 'post', 'files' => true, 'class' => 'form-horizontal' ] ) !!}

					@include('location._form')
				</form>
			</div>
		</div>
		<!-- /form horizontal -->
		<script>
			var map = new google.maps.Map(document.getElementById('map-canvas'),{
				center:{
					lat: -7.795579799999998,
		        	lng: 110.36948959999995
				},
				zoom:15
			});
			var marker = new google.maps.Marker({
				position: {
					lat: -7.795579799999998,
		        	lng: 110.36948959999995
				},
				map: map,
				draggable: true
			});
			
			var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
			google.maps.event.addListener(searchBox,'places_changed',function(){
				var places = searchBox.getPlaces();
				var bounds = new google.maps.LatLngBounds();
				var i, place;
				for(i=0; place=places[i];i++){
		  			bounds.extend(place.geometry.location);
		  			marker.setPosition(place.geometry.location); //set marker position new...
		  		}
		  		map.fitBounds(bounds);
		  		map.setZoom(15);
			});
			google.maps.event.addListener(marker,'position_changed',function(){
				var lat = marker.getPosition().lat();
				var lng = marker.getPosition().lng();

				$('#lat').val(lat);
				$('#lng').val(lng);
			});
		</script>

@endsection