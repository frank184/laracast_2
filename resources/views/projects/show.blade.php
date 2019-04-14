@extends('layouts.application')

@section('title', 'Projects')

@section('content')

  <h1>Projects</h1>
  
  <a href="/projects/create">New Project</a>

  <h4>{{ $project->title }}</h4>
  <p>{{ $project->description }}</p>
  <a href="{{ route('projects.edit', ['project' => $project]) }}">
    Edit
  </a>
@endsection
