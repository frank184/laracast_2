@extends('layouts.application')

@section('title', 'New Project')

@section('content')
  <h1 class="title is-1">
    Edit Project
    <span class="subtitle has-text-grey">
      Edit an existing project
    </span>
  </h1>
  
  <hr>

  <div class="columns">
    <div class="column">
      <form action="/projects/{{ $project->id }}" method="post"  style="display:inline;">
        @csrf
        @method('PUT')
        
        <div class="field">
          <label for="title" class="label">Title</label>
          <div class="control">
            <input type="text" name="title" placeholder="Enter a title" value="{{ $project->title }}" class="input {{ $errors->has('title') ? 'is-danger' : '' }}">
          </div>
        </div>
        
        <div class="field">
          <label for="description" class="label">Description</label>
          <div class="control">
            <textarea name="description" rows="8" cols="80" placeholder="Enter a description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}">{{ $project->description }}</textarea>
          </div>
        </div>
        
        <div class="field">
          @if ($errors->any())
            <div class="notification is-danger">
              <ul>
                @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          @endif
        </div>
        
        <button type="submit" name="button" class="button">Update a Project</button>
      </form>
    </div>
    <div class="column"></div>
  </div>
@endsection
