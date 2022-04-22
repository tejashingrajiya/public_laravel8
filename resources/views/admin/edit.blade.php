<h3 class="box-title">Edit Country</h3>
        
<form role="form" action="{{ route('admin.update',$admin->id) }}" method="POST" enctype="multipart/form-data">
	@csrf
	@method('PUT')
	<label for="">Name</label>
	<input type="text" name="name" id="name" value="{{ $admin->name }}">
	@if ($errors->has('name'))
	<strong style="color:red;">{{ $errors->first('name') }}</strong>
	@endif
	<label for="">Country Name</label>
	<input type="text" name="country_name" id="country_name" value="{{ $admin->country_name }}">
	@if ($errors->has('country_name'))
	<strong style="color:red;">{{ $errors->first('country_name') }}</strong>
	@endif
	<button type="submit" class="btn btn-primary">Update</button>
</form>
