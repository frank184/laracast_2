@extends('layouts.base')

@section('layout')
  <div id="app" class="container">
    <nav class="navbar" role="navigation" aria-label="main navigation">
      <div class="navbar-brand">
        <a class="navbar-item" href="https://bulma.io">
          <img src="https://bulma.io/images/bulma-logo.png" width="112" height="28">
        </a>

        <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
          <span aria-hidden="true"></span>
        </a>
      </div>

      <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">
          <a class="navbar-item" href="/">
            Home
          </a>

          <a class="navbar-item" href="/projects">
            Projects
          </a>
        </div>

        <div class="navbar-end">
          <div class="navbar-item">
            <div class="buttons">
              @guest
                <a class="button is-info" href="{{ route('register') }}">
                  <strong>{{ __('Register') }}</strong>
                </a>
                <a class="button is-light" href="{{ route('login') }}">
                  {{ __('Login') }}
                </a>
              @else
                <a class="button is-light" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
              @endguest
            </div>
          </div>
        </div>
      </div>
    </nav>
    
    @yield('content')
  </div>
@endsection
