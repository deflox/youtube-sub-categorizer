@extends('layouts.app')

@section('title')
    Sign Up
@endsection

@section('content')
    <div class="box authentication is-clearfix">
        <h1 class="title is-1">Reset password</h1>
        <form method="post" action="{{ route('password.request') }}">
            {{ csrf_field() }}
            <input type="hidden" name="token" value="{{ $token }}">
            <div class="field">
                <label for="email" class="label">Your email:</label>
                <div class="control">
                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="email" name="email" id="email" value="{{ old('email') }}" required autofocus>
                </div>
                @if ($errors->has('email'))
                    <p class="help is-danger">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="field">
                <label for="password" class="label">
                    New password:
                </label>
                <div class="control">
                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="password" name="password" id="password" required>
                </div>
                @if ($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="field">
                <label for="password-confirm" class="label">
                    Confirm password:
                </label>
                <div class="control">
                    <input class="input {{ $errors->has('password_confirmation') ? 'is-danger' : '' }}" type="password" name="password_confirmation" id="password-confirm" required>
                </div>
                @if ($errors->has('password_confirmation'))
                    <p class="help is-danger">{{ $errors->first('password_confirmation') }}</p>
                @endif
            </div>
            <button class="button is-primary is-pulled-right">
                Reset password
            </button>
        </form>
    </div>
    <a href="{{ route('login') }}" class="authentication-link">Are you already signed up?</a>
@endsection
