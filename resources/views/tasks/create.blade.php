@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Create Task</h1>
        <form method="POST" action="{{ route('tasks.store') }}">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>
                </br>
                <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
@endsection
