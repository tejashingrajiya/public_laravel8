<h3 class="box-title">Add admin</h3>
            
<form role="form" action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
@csrf
	<label for="">Name</label>
	<input type="text" name="name" id="name" placeholder="Enter name Name Here" value="{{ old('name') }}">
	@if ($errors->has('name'))
		<strong style="color:red;">{{ $errors->first('name') }}</strong>
	@endif
	<label for="">Country Name</label>
	<input type="text" name="country_name" id="country_name" placeholder="Enter Country Name Here" value="{{ old('country_name') }}">
	@if ($errors->has('country_name'))
		<strong style="color:red;">{{ $errors->first('country_name') }}</strong>
	@endif

	<button type="submit" class="btn btn-primary">Submit</button>
</form>
