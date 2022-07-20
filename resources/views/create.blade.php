@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    <main class="container">
                       <form action="{{route('employee.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Olusegun" value="{{old('name')}}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        <div class="form-group my-3">
                            <label for="designation">Designation:</label>
                            <input type="text" name="designation" class="form-control" id="designation" placeholder="Social Media" value="{{old('designation')}}">
                        </div>
                        @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                            <button type="submit" class="btn btn-primary">Save</button>
                       </form>
                    </main>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
