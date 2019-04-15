@extends('layouts.application')

@section('title', 'Projects')

@section('content')
  <h1 class="title is-1">
    {{ $project->title }}
    <div class="is-pulled-right">
      <a href="/projects/{{ $project->id }}/edit" class="button">
        <span class="icon">
          <i class="fas fa-fw fa-edit"></i>
        </span>
        &nbsp;
        Edit Project
      </a>
    </div>
  </h1>
  
  <hr>

  <p class="subtitle has-text-grey">
    {{ $project->description }}
  </p>
  
  <form action="/projects/{{ $project->id }}/tasks" method="post">
    @csrf
    
    @if ($errors->any())
      <div class="errors">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    
    <div class="field has-addons">
      <div class="control">
        <input type="text" name="title" class="input" placeholder="Enter a Task">
      </div>
      <div class="control">
        <button type="submit" name="button" class="button is-info">Create Task</button>
      </div>
    </div>
  </form>
  
  <div class="tasks" style="margin-top:1rem;">
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
  </div>
@endsection
