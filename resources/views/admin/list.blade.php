<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">

<h1>admins List</h1>

@if (Session::get('success'))
<h4>Success!</h4>
{{ Session::get('success') }}
@endif

<a class="btn btn-success" href="{{ route('admin.create') }}"> Create admin</a>	

<table id="country_list" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Country Name</th>
			<th>created_at</th>
			<th>updated_at</th>
			<th>Edit</th>
			<th>delete</th>              
		</tr>
	</thead>
	<tbody>
		@foreach ($admin_names as $admin_name)
		<tr>
			<td>{{ $admin_name->id }}</td>
			<td>{{ $admin_name->name }}</td>
			<td>{{ $admin_name->country_name }}</td>
			<td>{{ $admin_name->created_at }}</td>
			<td>{{ $admin_name->updated_at }}</td>
			<td><a class="btn btn-primary" href="{{ route('admin.edit',$admin_name->id) }}">Edit</a></td>
			<td><form action="{{ route('admin.destroy',$admin_name->id) }}" method="Post">
@csrf
@method('DELETE')
<button type="submit" class="btn btn-danger">Delete</button>
</form></td>
		</tr>
		@endforeach
	</tbody>
</table>

