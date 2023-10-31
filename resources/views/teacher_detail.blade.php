@extends('layout.mainlayout')

@section('title', 'Detail')

@section('content')
    <h2>
        Detail Teacher: {{$teacher->name}}
    </h2>

    <div class="mt-5">
        <h3>Class : 
                @if ($teacher->class)
                    {{$teacher->class->name}}
                @else
                -
            @endif
        </h3>
    </div>
    <div class="mt-5">
        <h4>List Student:
            @if ($teacher->class)
            <ol>
                @foreach ($teacher->class->student as $item)
                <li>
                    {{$item->name}}
                </li>
                @endforeach
            </ol>
            @endif
        </h4>
    </div>
    
    
@endsection