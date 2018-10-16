@extends('layouts.default')
@section('title', '主页')

@section('content')
    <div class="jumbotron mt-3">
        <h1 class="display-4">Hello, laravel!</h1>
        <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
        <hr class="my-4">
        <p class="lead">
            <a class="btn btn-dark" href="{{route('sign-up')}}">Register Now</a>
        </p>
    </div>
@stop