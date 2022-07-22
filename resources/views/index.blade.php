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
                        @if(count($employees) < 1)
                        <p>{{'No Employee Data to display'}}</p>
                        @else
                        @foreach($employees as $employee)
                        <div class="my-4">
                       <a href="{{route('employee.show', ['employee' => $employee->id])}}"> <h4>{{$employee->name}}</h4> </a>
                        <small>{{$employee->designation}}</small>
                        
                        </div>
                        @endforeach
                        @endif
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
