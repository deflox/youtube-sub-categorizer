@extends('layouts.app')

@section('title')
    Sign In
@endsection

@section('content')
    <div class="box authentication is-clearfix">
        <h1 class="title is-1">Sign In</h1>
        <h2 class="subtitle is-5">YouTube Sub Categorizer</h2>
        <form method="post" action="{{ route('login') }}">
            @csrf
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
                    Your password:<a href="{{ route('password.request') }}" class="reset-password-link is-pulled-right">Forgot password?</a>
                </label>
                <div class="control">
                    <input class="input {{ $errors->has('email') ? 'is-danger' : '' }}" type="password" name="password" id="password" required>
                </div>
                @if ($errors->has('password'))
                    <p class="help is-danger">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        Remember me
                    </label>
                </div>
            </div>
            <button class="button is-primary is-pulled-right">
                Sign In
            </button>
        </form>
    </div>
    <a href="{{ route('register') }}" class="authentication-link">Are you not signed up yet?</a>
@endsection
