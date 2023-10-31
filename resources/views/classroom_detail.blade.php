@extends('layout.mainlayout')

@section('title', 'Detail')

@section('content')
    <h2>
        Detail Class: {{$class->name}}
    </h2>

    <div class="mt-5">
        <h4>Homeroom Teacher : {{$class->homeroom->name}}</h4>
    </div>

    <div class="mt-5">
        <h4>Student list</h4>
        <ol>
            
            @foreach ($class->student as $item)
            <li>
                {{$item->name}}
            </li>
            @endforeach
        </ol>
    </div>
    <style>
        th{
            width: 25%;
        }
    </style>
@endsection