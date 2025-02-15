@extends('layouts.app')

@section('content')
    <h1>Task List</h1>
    <a href="{{ route('tasks.create') }}">Create New Task</a>
    
    <ul>
        @forelse ($tasks as $task)
            <li>
                {{ $task->title }} - {{ $task->is_completed ? 'Completed' : 'Pending' }}
                <a href="{{ route('tasks.show', $task) }}">View</a>
                <a href="{{ route('tasks.edit', $task) }}">Edit</a>
                <form action="{{ route('tasks.destroy', $task) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @empty
            <p>No tasks yet.</p>
        @endforelse
    </ul>
@endsection
