	<fieldset class="content-group">
	<legend class="text-bold"></legend>

	<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}" >
		<label class="control-label col-lg-2">Name</label>
		<div class="col-lg-10">
			<input type="text"  name="name"  value="{{ $location->name}}" class="form-control" placeholder="Name">

			 @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('city') ? ' has-error' : '' }}" >
		<label class="control-label col-lg-2">City</label>
		<div class="col-lg-10">
			<input type="text"  name="city"  value="{{ $location->city}}" class="form-control" placeholder="Name">

			 @if ($errors->has('city'))
                <span class="help-block">
                    <strong>{{ $errors->first('city') }}</strong>
                </span>
            @endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}" >
		<label class="control-label col-lg-2">Address</label>
		<div class="col-lg-10">
			<input type="text"  name="address"  value="{{ $location->address}}" class="form-control" placeholder="Name">

			 @if ($errors->has('address'))
                <span class="help-block">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
            @endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('price') ? ' has-error' : '' }}" >
		<label class="control-label col-lg-2">Price</label>
		<div class="col-lg-10">
			<input type="text"  name="price"  value="{{ $location->price}}" class="form-control" placeholder="Name">

			 @if ($errors->has('price'))
                <span class="help-block">
                    <strong>{{ $errors->first('price') }}</strong>
                </span>
            @endif
		</div>
	</div>

	<div class="form-group">
			
			<label class="control-label col-lg-2">Maps Location Search</label>
			<div class="col-lg-10">
			<input type="text" class="form-control" id="searchmap" placeholder="Search Parking Location"><br>
			<div id="map-canvas"></div>

			</div>
		</div>

		{{-- <div id="map-canvas"></div>
 --}}

	<div class="form-group {{ $errors->has('lng') ? 'has-error' : ''}}">
		<label class="control-label col-lg-2">Longitude</label>
		<div class="col-lg-10">
			<input type="text"  name="lng" id="lng"  value="{{ $location->lng }}" class="form-control" placeholder="Longitude">

			@if ($errors->has('lng'))
				<span class="help-block">
					<strong>{{ $errors->first('lng') }}</strong>
				</span>
			@endif
		</div>
	</div>


	<div class="form-group {{ $errors->has('lat') ? 'has-error' : ''}}">
		<label class="control-label col-lg-2">Latitude</label>
		<div class="col-lg-10">
			<input type="text"  name="lat" id="lat" value="{{ $location->lat }}" class="form-control" placeholder="Latitude">

			@if ($errors->has('lat'))
				<span class="help-block">
					<strong>{{ $errors->first('lat') }}</strong>
				</span>
			@endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('open_parking') ? 'has-error' : ''}}">
		<label class="control-label col-lg-2">Open Parking</label>
		<div class="col-lg-10">
			<input type="text"  name="open_parking"  value="{{ $location->parking->open_parking }}" class="form-control" placeholder="Enter Open Parking">

			@if ($errors->has('open_parking'))
				<span class="help-block">
					<strong>{{ $errors->first('open_parking') }}</strong>
				</span>
			@endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('close_parking') ? 'has-error' : ''}}">
		<label class="control-label col-lg-2">Close Parking</label>
		<div class="col-lg-10">
			<input type="text"  name="close_parking"  value="{{ $location->parking->close_parking }}" class="form-control" placeholder="Enter Close Parking">

			@if ($errors->has('close_parking'))
				<span class="help-block">
					<strong>{{ $errors->first('close_parking') }}</strong>
				</span>
			@endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}" >
		<label class="control-label col-lg-2">Description</label>
		<div class="col-lg-10">
			<textarea name="description" class="form-control" value="{{ $location->description}}"></textarea>
		</div>
	</div>

	{{-- <div class="form-group">
		<label class="control-label col-lg-2">Image</label>
		<div class="col-lg-10">
			<input type="file"  name="picture" class="form-control">
		</div>
	</div>
	<center>
		 @if($location->image->picture)
	           <img width="190" height="119" class="img-responsive img-thumbnail" src="{{asset($location->image->picture)}}" alt="">
	         @endif
	</center>
		 --}}
	
	<div class="text-right">
	<a href="{{ url('manage')}}" class="btn btn-primary"><i class="icon-arrow-left7 position-left"></i>Back</a>

	<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right7 position-right"></i></button>
</div>