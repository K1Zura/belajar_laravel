@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
	<h1>Halaman Student</h1>

	<div class="my-5 d-flex justify-content-between">
		<a class="btn btn-primary" href="student-add">Add Data</a>
		<a href="student-deleted" class="btn btn-info">Show Deleted Data</a>
	</div>

	@if (Session::has('status'))
		<div class="alert alert-success">
			<strong>Success!</strong><br>{{Session::get('message')}}
		</div>
	@endif
	@if (Session::has('kondisi'))
		<div class="alert alert-success">
			<strong>Success!</strong><br>{{Session::get('pesan')}}
		</div>
	@endif
	@if (Session::has('status-restore'))
		<div class="alert alert-success">
			<strong>Success!</strong><br>{{Session::get('restore')}}
		</div>
	@endif
	<h3>Student List</h3>

	<div class="my-3 col-12 col-sm-8 col-md-6">
		<form action="" method="GET">
			<div class="input-group mb-3">
				  <input type="text" class="form-control" name="keyword" id="floatingInputGroup1" placeholder="Keyword">
				  <button class="input-group-text btn btn-primary">
					<svg id="i-search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" width="32" height="32" fill="none" stroke="currentcolor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
						<circle cx="14" cy="14" r="12" />
						<path d="M23 23 L30 30"  />
					</svg>
				</button>
			  </div>
		</form>
	</div>
	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Gender</th>
				<th>NIS</th>
				<th>Class</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($pelajar as $data)
				<tr>
					<td>{{$loop->iteration}}</td>
					<td>{{$data->name}}</td>
					<td>{{$data->gender}}</td>
					<td>{{$data->nis}}</td>
					<td>{{$data->class->name}}</td>
					<td >
						<a class="btn btn-primary"href="student/{{$data->id}}">Detail</a>
						<a class="btn btn-success" href="student-update/{{$data->id}}">Update</a>
						<a class="btn btn-danger" href="student-delete/{{$data->id}}">Delete</a>
					</td>
					{{-- <td>{{$data->class['name']}}</td>
					<td>
						@foreach ($data->ekstras as $item)
							-{{$item->name}}<br>
							
						@endforeach
					</td>
					<td>{{$data->class->homeroom->name}}</td> --}}
				</tr>
			@endforeach
		</tbody>
	</table>

	<div class="my-5">
		{{$pelajar->withQueryString()->links()}}
	</div>
@endsection