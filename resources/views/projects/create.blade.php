@extends('layouts.application')

@section('title', 'New Project')

@section('content')
  <h1 class="title is-1">
    New Project
    <span class="subtitle has-text-grey">
      Create a new project
    </span>
  </h1>
  
  <div class="columns">
    <div class="column">
      <form action="/projects" method="POST">
        @csrf
        @method('POST')
        
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
            <input type="text" name="title" class="input" placeholder="Enter a title" required value="{{ old('title') }}">
          </div>
        </div>
        
        <div class="field">
          <label for="description" class="label">Description</label>
          <div class="control">
            <textarea name="description" class="textarea" rows="8" cols="80" placeholder="Enter a description" required>{{ old('description') }}</textarea>
          </div>
        </div>
        
        <div class="field">
          <button type="submit" name="button" class="button">Create a Project</button>
        </div>
      </form>
    </div>
    <div class="column"></div>
  </div>
@endsection
