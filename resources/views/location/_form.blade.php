<fieldset class="content-group">
	<legend class="text-bold"></legend>

	<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}" >
		<label class="control-label col-lg-2">Name</label>
		<div class="col-lg-10">
			<input type="text"  name="name" id="title" value="{{ old('name') }}" class="form-control" placeholder="Enter Name">

			 @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('city') ? 'has-error' : ''}}">
		<label class="control-label col-lg-2">City</label>
		<div class="col-lg-10">
			<input type="text"  name="city"  value="{{ old('city') }}" class="form-control" placeholder="Enter City">

			@if ($errors->has('city'))
				<span class="help-block">
					<strong>{{ $errors->first('city') }}</strong>
				</span>
			@endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('price') ? 'has-error' : ''}}">
		<label class="control-label col-lg-2">Price</label>
		<div class="col-lg-10">
			<input type="text"  name="price"  value="{{ old('price') }}" class="form-control" placeholder="Rp">

			@if ($errors->has('price'))
				<span class="help-block">
					<strong>{{ $errors->first('price') }}</strong>
				</span>
			@endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('address') ? 'has-error' : ''}}">
		<label class="control-label col-lg-2">Address</label>
		<div class="col-lg-10">
			<input type="text"  name="address"  value="{{ old('address') }}" class="form-control" placeholder="Enter Address">

			@if ($errors->has('adress'))
				<span class="help-block">
					<strong>{{ $errors->first('address') }}</strong>
				</span>
			@endif
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-2">Description</label>
		<div class="col-lg-10">
			<textarea name="description" class="form-control" placeholder="Enter Description"></textarea>
			{{-- <input type="des"  name="password_confirmation" class="form-control" placeholder="Enter Confirm Password"> --}}
			@if($errors->has('description'))
			<span class="help-block">
				<strong>{{ $errors->first('description') }}</strong>
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


	<div class="form-group {{ $errors->has('lng') ? 'has-error' : ''}}">
		<label class="control-label col-lg-2">Longitude</label>
		<div class="col-lg-10">
			<input type="text"  name="lng" id="lng"  value="{{ old('lng') }}" class="form-control" placeholder="Longitude">

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
			<input type="text"  name="lat" id="lat" value="{{ old('lat') }}" class="form-control" placeholder="Latitude">

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
			<input type="text"  name="open_parking"  value="{{ old('open_parking') }}" class="form-control" placeholder="Enter Open Parking">

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
			<input type="text"  name="close_parking"  value="{{ old('close_parking') }}" class="form-control" placeholder="Enter Close Parking">

			@if ($errors->has('close_parking'))
				<span class="help-block">
					<strong>{{ $errors->first('close_parking') }}</strong>
				</span>
			@endif
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-2">Image</label>
		<div class="col-lg-10">
			<input type="file" name="picture" class="form-control">
		</div>
	</div>

<div class="text-right">
	<a href="{{ url('location')}}" class="btn btn-primary"><i class="icon-arrow-left7 position-left"></i>Back</a>

	<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right7 position-right"></i></button>
</div>

