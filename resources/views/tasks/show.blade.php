@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Task Details</h1>
        <p><strong>ID:</strong> {{ $task->id }}</p>
        <p><strong>Title:</strong> {{ $task->title }}</p>
        <!-- You can display more task details here if needed -->
        <a href="{{ route('tasks.index') }}" class="btn btn-secondary">Back to List</a>
    </div>
@endsection
