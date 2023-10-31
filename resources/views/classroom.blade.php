@extends('layout.mainlayout')

@section('title', 'Class')

@section('content')
	<h1>Halaman Class</h1>

	<div class="my-5">
		<a class="btn btn-primary" href="">Add Data</a>
	</div>

	<h3>Class List</h3>

	<table class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($classlist as $data)
			<tr>
				<td>{{$loop->iteration}}</td>
				<td>{{$data->name}}</td>
				<td><a class="btn btn-primary" href="class/{{$data->id}}">Detail</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<style>
		th
		{
			width: 30%;
		}
	</style>
@endsection