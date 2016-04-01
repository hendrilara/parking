@extends('layouts.app')

<style>
	#map-canvas{
		width: 100%;
		height: 400px;
	}
</style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQ1RwVJ-nyXxd6W0rfiIBe12Q"
  type="text/javascript"></script>

@section('content')
<div class="breadcrumb-line">
		<ul class="breadcrumb">
			<li>
				<a href="index.html"><i class="icon-home2 position-left"></i> Home</a>
			</li>
			<li>
				<a href="form_inputs_basic.html">Detail</a>
			</li>
			<li class="active">Location</li>
		</ul>
			</li>
		</ul>
		<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
	</div>
	

		  <h1>{{$location->name}}</h1>
		  <div id="map-canvas"></div>

	 <div class="text-right">
		<a href="{{ url('location')}}" class="btn btn-primary"><i class="icon-arrow-left7 position-left"></i>Back</a>
	</div>


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
    map:map
  });
  //thanks for watching..................
  //subscribe, share, like, comment............................
</script>

@endsection