@extends('layouts.default')
@section('title', trans('static.sign_up'))

@section('content')
    <div class="row">
        <div class="col-lg-3"></div>
        <div class="col-12 col-lg-6">
            <section class="register-form mt-5 mb-5">
                @if(count($errors) > 0)
                <div class="alert alert-danger" role="alert">
                    <ul class="alert-ul">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card">
                    <h5 class="card-header">{{ trans('static.sign_up') }}</h5>
                    <div class="card-body">
                        @include('shared._register_form')
                    </div>
                </div>
            </section>
        </div>
        <div class="col-lg-3"></div>
    </div>
@stop