@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
    <div class="mt-5">
        <form style="display: inline" action="/student-destroy/{{$student->id}}" method="post">
            @method('DELETE')
            @csrf
            <h2>Are you sure to delete this Data : {{$student->name}} ({{$student->nis}})?</h2>
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
            <a href="/student" class="btn btn-primary">Cancel</a>
    </div>
@endsection