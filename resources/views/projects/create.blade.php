@extends('layouts.application')

@section('title', 'New Project')

@section('content')
  <h1 class="title is-1">
    New Project
    <span class="subtitle has-text-grey">
      Create a new project
    </span>
  </h1>
  
  <hr>
  
  <div class="columns">
    <div class="column">
      <form action="/projects" method="POST">
        @csrf
        @method('POST')
        
        <div class="field">
          <label for="title" class="label">Title</label>
          <div class="control">
            <input type="text" name="title" placeholder="Enter a title" value="{{ old('title') }}" class="input {{ $errors->has('title') ? 'is-danger' : '' }}">
          </div>
        </div>
        
        <div class="field">
          <label for="description" class="label">Description</label>
          <div class="control">
            <textarea name="description" rows="8" cols="80" placeholder="Enter a description" class="textarea {{ $errors->has('description') ? 'is-danger' : '' }}">{{ old('description') }}</textarea>
          </div>
        </div>
        
        @include('shared.errors')
        
        <div class="field">
          <button type="submit" name="button" class="button">Create a Project</button>
        </div>
      </form>
    </div>
    <div class="column"></div>
  </div>
@endsection
