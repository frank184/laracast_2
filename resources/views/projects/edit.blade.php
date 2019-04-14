@extends('layouts.application')

@section('title', 'New Project')

@section('content')
  <h1 class="title is-1">
    Edit Project
    <span class="subtitle has-text-grey">
      Edit an existing project
    </span>
  </h1>

  <div class="columns">
    <div class="column">
      <form action="/projects/{{ $project->id }}" method="post"  style="display:inline;">
        @csrf
        @method('PUT')
        
        @if ($errors->any())
          <div class="errors">
            <ul>
              @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif
        
        <div class="field">
          <label for="title" class="label">Title</label>
          <div class="control">
            <input type="text" class="input" name="title" placeholder="Enter a title" value="{{ $project->title }}" required>
          </div>
        </div>
        
        <div class="field">
          <label for="description" class="label">Description</label>
          <div class="control">
            <textarea name="description" class="textarea" rows="8" cols="80" placeholder="Enter a description" required>{{ $project->description }}</textarea>
          </div>
        </div>
        
        <button type="submit" name="button" class="button">Update a Project</button>
      </form>
      
      <form action="/projects/{{ $project->id }}" method="post" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" name="button" class="button is-danger">Delete</button>
      </form>
    </div>
    <div class="column"></div>
  </div>
@endsection
