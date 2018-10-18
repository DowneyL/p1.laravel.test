@extends('layouts.default')
@section('title', $user->name . trans('static.personal_center'))

@section('content')
    <div class="row no-gutters">
        <div class="col-12 offset-md-4 col-md-4">
            <section class="user-info text-center">
                @include('shared._user_info', ['users' => $user])
            </section>
        </div>
    </div>
@stop
