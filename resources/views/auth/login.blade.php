@extends('layouts.authentication')

@section('content')
  <h1 class="title is-1">
    {{ __('Login') }}
    <span class="subtitle has-text-grey">
      Sign into your account
    </span>
  </h1>
  
  <hr>
  
  <div class="columns">
    <div class="column">
      <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="field">
          <label for="email" class="label">{{ __('E-Mail Address') }}</label>
          <div class="control">
            <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" autofocus placeholder="Enter an email address">
          </div>
        </div>

        <div class="field">
          <label for="password" class="label">{{ __('Password') }}</label>
          <div class="control">
            <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" placeholder="Enter a password">
          </div>
        </div>

        <div class="field">
          <div class="control">
            <label class="checkbox" for="remember">
              <input class="checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              {{ __('Remember Me') }}
            </label>
          </div>
        </div>
        
        @include('shared.errors')

        <div class="field">
          <button type="submit" class="button">
            {{ __('Login') }}
          </button>
        </div>

        <div class="field">
          <div>
            @if (Route::has('password.request'))
              <a href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
              </a>
            @endif
          </div>
          
          <div>
            <a href="{{ route('register') }}">
              {{ __('Register') }}
            </a>
          </div>
        </div>
      </form>
    </div>
    <div class="column"></div>
  </div>
@endsection
