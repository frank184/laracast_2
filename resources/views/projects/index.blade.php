@extends('layouts.application')

@section('title', 'Projects')

@section('content')

  <h1 class="title is-1">
    Projects
    <span class="subtitle has-text-grey">
      Create or configure your projects here
      <a href="/projects/create" class="button is-pulled-right">New Project</a>
    </span>
  </h1>
  
  @foreach($projects as $project)
    <article class="media">
      <figure class="media-left">
        <p class="image is-64x64">
          <img src="https://bulma.io/images/placeholders/128x128.png">
        </p>
      </figure>
      <div class="media-content">
        <div class="content">
          <p>
            <strong>{{ $project->title }}</strong>
            <br>
            {{ $project->description }}
          </p>
        </div>
        <nav class="level is-mobile">
          <div class="level-left">
            <a class="level-item" href="/projects/{{ $project->id }}">
              <span class="icon is-small"><i class="fas fa-fw fa-info"></i></span>
            </a>
            <a class="level-item" href="/projects/{{ $project->id }}/edit">
              <span class="icon is-small"><i class="fas fa-fw fa-edit"></i></span>
            </a>
            <div class="level-item">
              <form id="delete_{{ $project->id }}" action="/projects/{{ $project->id }}" method="post">
                @csrf
                @method('DELETE')
                <a class="level-item" onclick="$('#delete_{{ $project->id }}').submit()">
                  <span class="icon is-small"><i class="fas fa-fw fa-trash"></i></span>
                </a>
              </form>
            </div>
          </div>
        </nav>
      </div>
    </article>
  @endforeach
@endsection
