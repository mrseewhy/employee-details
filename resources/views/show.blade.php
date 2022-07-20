@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('message'))
                        <div class="alert alert-success" role="alert">
                            {{ session('message') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <main class="container">
                        <div class="my-5">
                        <h4>{{$employee->name}}</h4>
                        <small>{{$employee->designation}}</small>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
