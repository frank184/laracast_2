@extends('layouts.application')

@section('title', 'Projects')

@section('content')

  <h1>Projects</h1>
  
  <a href="/projects/create">New Project</a>

  @foreach($projects as $project)
    <div id={{ $project->id }} class="project">
      <h4>{{ $project->title }}</h4>
      <p>{{ $project->description }}</p>
      <a href="{{ route('projects.show', ['project' => $project]) }}">
        Show
      </a>
      <a href="{{ route('projects.edit', ['project' => $project]) }}">
        Edit
      </a>
    </div>
  @endforeach
@endsection
