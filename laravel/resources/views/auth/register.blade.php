@extends('layout.app')
@section('title', 'Regestrarion')
@section('css', 'app')
@section('content')
    <div class="auth-form">
        <div class="container">
            <div class="text-container">
                <p><strong>Regestration</strong></p>
            </div>
            <a href="{{ route('login') }}">
                <img src="/img/log-in.png">
                <p>Log in</p>
            </a>
        </div>
        <form action="{{ route('register_process') }}" method="POST">
            @csrf

            <input type="text" name="name" placeholder="Login">
            @error('name')
            <p class = "error-message">{{ $message }}</p>
            @enderror

            <input type = 'password' name="password" placeholder="Password">
            @error('password')
            <p class = "error-message">{{ $message }}</p>
            @enderror

            <input type = 'password' name="password_confirmation" placeholder="Confirm password">
            @error('password_confirmation')
            <p class = "error-message">{{ $message }}</p>
            @enderror

            <button type="submit">Register</button>
        </form>
    </div>
@endsection
