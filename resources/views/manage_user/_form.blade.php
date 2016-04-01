<fieldset class="content-group">
	<legend class="text-bold"></legend>

	<div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}" >
		<label class="control-label col-lg-2">Name</label>
		<div class="col-lg-10">
			<input type="text"  name="name"  value="{{ old('name') }}" class="form-control" placeholder="Name">

			 @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
            @endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
		<label class="control-label col-lg-2">Email</label>
		<div class="col-lg-10">
			<input type="email"  name="email"  value="{{ old('email') }}" class="form-control" placeholder="Enter Email">

			@if ($errors->has('email'))
				<span class="help-block">
					<strong>{{ $errors->first('email') }}</strong>
				</span>
			@endif
		</div>
	</div>

	<div class="form-group {{ $errors->has('password') ? 'has-error' : ''}}">
		<label class="control-label col-lg-2">Password</label>
		<div class="col-lg-10">
			   <input type="password" class="form-control" name="password" placeholder="Enter Password"> 

		@if($errors->has('password'))
			<span class="help-block">
				<strong>{{ $errors->first('password') }}</strong>
			</span>
		@endif

		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-2">Confirm Password</label>
		<div class="col-lg-10">
			<input type="password"  name="password_confirmation" class="form-control" placeholder="Enter Confirm Password">
		</div>
	</div>

	<div class="form-group {{ $errors->has('role') ? 'has->error' : ''}}">
		<label class="control-label col-lg-2">Role</label>
		<div class="col-lg-10">
			<select name="role" class="form-control">
                <option value="operator">select role</option>
                <option value="superadmin">Superadmin</option>
                <option value="administrator">Administrator</option>
                <option value="operator">Operator</option>
               
            </select>

            @if($errors->has('role'))
            	<span class="help-block">
            		<strong>{{ $errors->first('role')}}</strong>
            	</span>
            @endif
		</div>
	</div>

	<div class="form-group">
		<label class="control-label col-lg-2">Image</label>
		<div class="col-lg-10">
			<input type="file" name="avatar" class="form-control">
		</div>
	</div>

<div class="text-right">
	<a href="{{ url('manage')}}" class="btn btn-primary"><i class="icon-arrow-left7 position-left"></i>Back</a>

	<button type="submit" class="btn btn-primary">Submit <i class="icon-arrow-right7 position-right"></i></button>
</div>