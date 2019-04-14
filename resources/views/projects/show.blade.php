@extends('layouts.application')

@section('title', 'Projects')

@section('content')
  <div>
    <span class="title is-1">
      {{ $project->title }}
    </span>
    
    <a href="/projects/{{ $project->id }}/edit" class="is-pulled-right">
      <span class="icon is-small"><i class="fas fa-fw fa-edit"></i></span>
    </a>
  </div>
  
  <hr>

  <p class="subtitle has-text-grey">
    {{ $project->description }}
  </p>
  
  <hr>
  
  @if ($project->tasks->count())
    <ul>
      @foreach($project->tasks as $task)
        <li>
          <form action="/tasks/{{ $task->id }}" method="post">
            @csrf
            @method('PATCH')
            <label for="completed">
              <input type="checkbox" name="completed" onChange="this.form.submit()" {{ $task->completed == 1 ? 'checked' : '' }}>
              {{ $task->title }}
            </label>
          </form>
        </li>
      @endforeach
    </ul>
  @endif
  
  
@endsection
