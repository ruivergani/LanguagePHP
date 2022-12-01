@extends('layouts.app')

@section('title', 'Add a Name Page')

@section('content')

    <h1>Add a Name</h1>

    <form action="/store" method="post">
        {{ csrf_field() }}

        <p>
            <label for="name">Name:
                <input type="text" id="name" name="name">
            </label>
        </p>

        <p>
            <input type="submit" value="Submit">
        </p>
    </form>

@endsection
