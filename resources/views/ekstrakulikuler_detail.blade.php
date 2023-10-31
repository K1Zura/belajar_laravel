@extends('layout.mainlayout')

@section('title', 'Detail')

@section('content')
    <h2>
        Detail Extracurricular: {{$ekstra->name}}
    </h2>

    <div class="mt-5">
        <h4>Student list:</h4>
        <ol>
            
            @foreach ($ekstra->students as $item)
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