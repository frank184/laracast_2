@extends('layouts.application')

@section('title', 'New Project')

@section('content')
  <h1>New Project</h1>
  
  <form action="/projects" method="POST">
    @csrf
    <div class="form-group">
      <label for="title"></label>
      <input type="text" name="title" placeholder="Enter a title">
    </div>
    
    <div class="form-group">
      <label for="description"></label>
      <textarea name="description" rows="8" cols="80" placeholder="Enter a description"></textarea>
    </div>
    
    <div class="form-group">
      <button type="submit" name="button">Create a Project</button>
    </div>
  </form>
@endsection
