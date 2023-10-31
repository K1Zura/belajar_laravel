@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')
<h1>Home</h1>
<h2>Selamat Datang, {{Auth::user()->name}}, Anda Adalah, {{Auth::user()->role->name}}</h2>

@endsection