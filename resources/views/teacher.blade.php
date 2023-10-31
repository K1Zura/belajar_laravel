@extends('layout.mainlayout')

@section('title', 'Teacher')

@section('content')
	<h1>Halaman Teacher</h1>

    <div class="my-5">
		<a class="btn btn-primary" href="">Add Data</a>
	</div>

	<h3>Teacher List</h3>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teacherlist as $data)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$data->name}}</td>
                    <td><a class="btn btn-primary"href="teacher/{{$data->id}}">Detail</a></td>
                </tr>
                
            @endforeach
        </tbody>
    </table>

    <style>
        tr
        {
            width: 25%
        }
    </style>

@endsection