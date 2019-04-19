@extends('layouts.authentication')

@section('content')
  <h1 class="title is-1">
    {{ __('Register') }}
    <span class="subtitle has-text-grey">
      Create a new account
    </span>
  </h1>

  <hr>

  <div class="columns">
    <div class="column">
      <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <div class="field">
          <label for="username" class="label">{{ __('Userame') }}</label>
          <div class="control">
            <input id="username" type="text" class="input{{ $errors->has('username') ? ' is-danger' : '' }}" name="username" value="{{ old('username') }}" autofocus placeholder="Enter a username">
          </div>
        </div>
        
        <div class="field">
          <label for="email" class="label">{{ __('E-Mail Address') }}</label>
          <div class="control">
            <input id="email" type="email" class="input{{ $errors->has('email') ? ' is-danger' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter an email address">
          </div>
        </div>

        <div class="field">
          <label for="password" class="label">{{ __('Password') }}</label>
          <div class="control">
            <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-danger' : '' }}" name="password" placeholder="Enter a password">
          </div>
        </div>
        
        <div class="field">
          <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>
          <div class="control">
            <input id="password-confirm" type="password" class="input" name="password_confirmation" placeholder="Confirm password">
          </div>
        </div>
        
        @include('shared.errors')
        
        <div class="field">
          <button type="submit" class="button">
            {{ __('Register') }}
          </button>
        </div>
      </form>
    </div>
    <div class="column"></div>
  </div>
@endsection
