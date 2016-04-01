@extends('layouts.app')
<style>
	#map-canvas{
		width: 100%;
		border-radius: 4px;
		height: 250px;
	}
</style>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script type="text/javascript" src="assets/js/maps/google/basic/basic.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>


@section('content')

	<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li>
				<a href="{{ url('dashboard')}}"><i class="icon-home2 position-left"></i> Home</a>
			</li>
			<li>
				<a href="">Forms</a>
			</li>
			<li class="active">Basic inputs</li>
		</ul>
			</li>
		</ul>
		<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
	</div>

		<!-- Form horizontal -->
		<div class="panel panel-flat">
			<div class="panel-heading">
				<h5 class="panel-title">Edit Location</h5>
				<div class="heading-elements">
					<ul class="icons-list">
                		<li><a data-action="collapse"></a></li>
                		<li><a data-action="reload"></a></li>
                		<li><a data-action="close"></a></li>
                	</ul>
            	</div>
			</div>

			<div class="panel-body">	
	
				 {!!Form::model($location, ['url' => ['location/update', $location], 'method' => 'PUT', 'files' => true, 'class' => 'form-horizontal' ] ) !!}

					@include('location._edit', ['model' => $location])
				</form>
			</div>
		</div>
		<!-- /form horizontal -->

		<script>
		  var lat = {{$location->lat}};
		  var lng = {{$location->lng}};
		  var map = new google.maps.Map(document.getElementById('map-canvas'),{
		    center:{
		      lat: lat,
		      lng: lng
		    },
		    zoom: 15
		  });
		  var marker = new google.maps.Marker({
		    position:{
		      lat:lat,
		      lng: lng
		    },
		    map:map,
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


