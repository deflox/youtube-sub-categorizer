@extends('layouts.app')

@section('content')
    <div class="box authentication is-clearfix">
        <h1 class="title is-1">YTC</h1>
        <h2 class="subtitle is-5">YouTube Sub Categorizer</h2>
        <div class="notification is-danger">
            Those credentials did not match with our records. Please try again.
        </div>
        <form>
            <div class="control">
                <label for="email">Your email:</label>
                <input class="input" type="email" name="email" id="email">
            </div>
            <div class="control">
                <label for="password">Your password:<a class="is-pulled-right reset-password-link">Forgot password?</a></label>
                <input class="input" type="password" name="password" id="password">
            </div>
            <div class="control">
                <label class="checkbox">
                    <input type="checkbox">
                    Remember me
                </label>
            </div>
            <button class="button is-primary is-pulled-right">
                Login
            </button>
        </form>
    </div>

    <a href="" class="authentication-link">Are you not signed up yet?</a>
@endsection
