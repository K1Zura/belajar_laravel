@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
	<h1>Deleted List</h1>

    <div class="mt-5">
        <a href="student" class="btn btn-primary">Back</a>
    </div>

    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>NIS</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->gender}}</td>
                        <td>{{$item->nis}}</td>
                        <td>
                            <a href="/student/{{$item->id}}/restore" class="btn btn-primary">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection