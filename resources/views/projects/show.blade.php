@extends('layouts.application')

@section('title', 'Projects')

@section('content')

  <h1>{{ $project->title }}</h1>
  <p>{{ $project->description }}</p>
  
  @if ($project->tasks->count())
    <ul>
      @foreach($project->tasks as $task)
        <li>
          <label for="completed">
            <input type="checkbox" name="completed" {{ $task->completed == 1 ? 'checked' : '' }}>
            {{ $task->title }}
          </label>
        </li>
      @endforeach
    </ul>
  @endif
  
  <a href="{{ route('projects.edit', ['project' => $project]) }}">
    Edit
  </a>
@endsection
