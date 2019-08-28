@extends('layout')
@section('title', 'welcome page')
@section('content')
    <h1>my first laravel</h1>

@endsection()
<ul>
    @foreach($tasks as $task)
        <li>{{ $task }}</li>
    @endforeach
</ul>
