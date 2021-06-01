@extends('layouts.app')

@section('content')
    <h1>Login Page</h1>

    @if ( session()->has('fail') )
        <div style="color: red">{{ session()->get('fail') }}</div>
    @endif

    <form action="{{ route('auth.login') }}" method="POST">
        @csrf
        <div>
            <div>
                <label for="email">Email address</label>
                <input type="email" name="email">
                <span>@error('email'){{ $message }}@enderror</span>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password">
                <span>@error('password'){{ $message }}@enderror</span>
            </div>
            <div>
                <label for="rememberme">Remember Me</label>
                <input type="checkbox" name="rememberme" value="True">
                <span>@error('rememberme'){{ $message }}@enderror</span>
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </div>
    </form>
    Dont have an account? <a href={{ route('register') }}>Register here!</a>
@endsection