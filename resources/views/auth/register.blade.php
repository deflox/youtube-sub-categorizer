@extends('layouts.app')

@section('title')
    Sign Up
@endsection

@section('content')
    <div class="box authentication is-clearfix">
        <h1 class="title is-1">Sign Up</h1>
        <h2 class="subtitle is-5">YouTube Sub Categorizer</h2>
        <form method="post" action="{{ route('register') }}">
            {{ csrf_field() }}
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
                    Your password:
                </label>
                <div class="control">
                    <input class="input {{ $errors->has('password') ? 'is-danger' : '' }}" type="password" name="password" id="password" required>
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
                Sign Up
            </button>
        </form>
    </div>
    <a href="{{ route('login') }}" class="authentication-link">Are you already signed up?</a>
@endsection