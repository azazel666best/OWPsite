@extends('layout.app')
@section('title', 'Authorization')
@section('css', 'auth')
@section('content')
    <div class = "auth-form">
        <div class = "log-in-container">
            <p><strong>Log in</strong></p>
            <p>
                If you don't have an account, <a href = "{{route('register')}}">register</a>
            </p>
        </div>
        <form action = "{{ route('login_process') }}" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Login" >
            @error('name')
            <p class = "error-message">{{ $message }}</p>
            @enderror
            <input type = 'password' name="password" placeholder="Password" >
            <button type="submit">Log in</button>
        </form>
    </div>
@endsection
