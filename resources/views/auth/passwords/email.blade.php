@extends('layouts.app')

@section('title')
    Reset password
@endsection

@section('content')
    <div class="box authentication is-clearfix">
        <h1 class="title is-2">Reset password</h1>
        @if (session('status'))
            <div class="notification is-danger">
                {{ session('status') }}
            </div>
        @endif
        <form method="post" action="{{ route('password.email') }}">
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
            <button class="button is-primary is-pulled-right">
                Submit
            </button>
        </form>
    </div>
    <a href="{{ route('login') }}" class="authentication-link"><i class="fas fa-arrow-left"></i> Back</a>
@endsection