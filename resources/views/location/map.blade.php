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
				<a href="form_inputs_basic.html">Forms</a>
			</li>
			<li class="active">Basic inputs</li>
		</ul>
			</li>
		</ul>
		<a class="breadcrumb-elements-toggle"><i class="icon-menu-open"></i></a>
	</div>
	
	<fieldset class="content-group">
		<legend class="text-bold"></legend>
		  <div id="map-canvas"></div>

	  </fieldset>
	 <div class="text-right">
		<a href="{{ url('location')}}" class="btn btn-primary"><i class="icon-arrow-left7 position-left"></i>Back</a>
	</div>

	<script>
	 
	  // var sites2 = [
   //          @foreach ($object as $siteatt)
   //              [{{$siteatt['lat']}},
   //              {{$siteatt['lng']}}],
   //           @endforeach
   //      ];
   //      
      var map_canvas = document.getElementById('map-canvas');

		// Initialise the map
		var map_options = {
		    center: location,
		    zoom: 10,
		    mapTypeId: google.maps.MapTypeId.ROADMAP
		}

	  var map = new google.maps.Map(document.getElementById(map_canvas, map_options)
	    	 var sites2 = [
	            @foreach ($object as $siteatt)
	                [{{$siteatt['lat']}},
	                {{$siteatt['lng']}}],
	             @endforeach
        ];
        
	  var marker = new google.maps.Marker({
	  	draggable: true,
	    animation: google.maps.Animation.DROP,

	    position:{

	      lat:lat,
	      lng: lng
	    },
	   
	     marker.addListener('click', toggleBounce);
	     map:map
	  }

	  function toggleBounce() {
	  if (marker.getAnimation() !== null) {
	    marker.setAnimation(null);
	  } else {
	    marker.setAnimation(google.maps.Animation.BOUNCE);
	  }
	});
	  </script>

@endsection
