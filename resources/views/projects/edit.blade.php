@extends('layouts.application')

@section('title', 'New Project')

@section('content')
  <h1>Edit Project</h1>
  
  <form action="{{ route('projects.update', ['project' => $project]) }}" method="post">
    @csrf
    @method('PUT')
    <div class="form-group">
      <label for="title"></label>
      <input type="text" name="title" placeholder="Enter a title" value="{{ $project->title }}">
    </div>
    
    <div class="form-group">
      <label for="description"></label>
      <textarea name="description" rows="8" cols="80" placeholder="Enter a description">
        {{ $project->description }}
      </textarea>
    </div>
    
    <div class="form-group">
      <button type="submit" name="button">Update a Project</button>
    </div>
  </form>
  
  <form action="{{ route('projects.update', ['project' => $project]) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" name="button">Delete</button>
  </form>
@endsection
