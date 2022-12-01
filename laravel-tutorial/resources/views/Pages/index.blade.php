@extends('layouts.app')
@section('title', 'List of Names')
@section('content')

<h1>User Names</h1>

<ol>
    @foreach ($names as $name)
        <li>{{ $name }}</li>
    @endforeach
</ol>

@endsection
