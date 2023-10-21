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

                    <h3>Go to Tasks page</h3>
                    <a href="{{ route('tasks.create') }}" class="btn btn-primary">Create Task</a>
                    
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
