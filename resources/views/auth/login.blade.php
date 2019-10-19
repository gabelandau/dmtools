@extends('layouts.app')

@section('content')
<div class="login-page">
    <h1 class="title is-1">Dungeon Master Tools</h1>
    <div class="box">
        Thanks for checking out Dungeon Master Tools! Our app is currently in a closed beta, so if you don't have access yet, check back later!
    </div>

    <div class="box">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="field">
                <label class="label">{{ __('Username') }}</label>
                <div class="control">
                    <input class="input @error('username') is-danger @enderror" type="username" value="{{ old('username') }}" name="username" required autocomplete="username" autofocus>
                </div>
                @error('username')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <label class="label">{{ __('Password') }}</label>
                <div class="control">
                    <input class="input @error('password') is-danger @enderror" type="password" name="password" required autocomplete="current-password">
                </div>
                @error('password')
                    <p class="help is-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="field">
                <div class="control">
                    <label class="checkbox">
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        {{ __('Remember Me') }}
                    </label>
                </div>
            </div>

            <div class="field is-grouped">
                <div class="control">
                    <button type="submit" class="button is-primary">{{ __('Log in') }}</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection
