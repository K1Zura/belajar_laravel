@extends('layout.mainlayout')

@section('title', 'Student')

@section('content')
    <h2>
        Detail Siswa: {{$student->name}}
    </h2>

    <div class="mt-5">
        <a href="/student" class="btn btn-primary">Back</a>
    </div>

    <div class="my-3 d-flex justify-content-center">
        @if($student->image != '')
            <img src="{{asset('storage/foto/'.$student->image)}}" alt="" width="500px">
        @else
        <img src="{{asset('/image/User-Icon.jpg/')}}" alt="" width="200px">
        @endif
    </div>

    <div class="mt-5 mb-5">
    <table class="table">
        <tr>
            <th>NIS</th>
            <th>Gender</th>
            <th>Class</th>
            <th>Homeroom Teacher</th>
        </tr>
        <tr>
            <td>{{$student->nis}}</td>
            <td>
                @if ($student->gender=='P')
                    Perempuan
                @else 
                    Laki-Laki
                @endif
            </td>
            <td>{{$student->class->name}}</td>
            <td>{{$student->class->homeroom->name}}</td>
        </tr>
    </table>
    </div>

    <h3>Extracuricurrar:</h3>
    <div>
        <h4>
        @foreach ($student->ekstras as $item)
            {{$item->name}}<br>
            
        @endforeach
    </div>
    </h4>

    <style>
        th{
            width: 25%;
        }
    </style>
@endsection