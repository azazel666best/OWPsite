@extends('layout.app')
@section('title', $post->title)
@section('content')
    @include('.partials.header')
    <main>
        <div class = "content">
            <h1>{{ $post->title }}</h1>
            @if($post->img)
            <div class='img-container'>
                <div class='img'>
                    <img src = "{{ asset("storage/image/$post->img.png") }}">
                </div>
            </div>
            @endif
            <p>{{ $post->text }}</p>
        </div>
        <div class = "comments">
            <div>
                <h1>Comments</h1>
                <hr>
            </div>
            <div class = "comment add-comment">
                <form action="{{ route('comment', $post->id) }}" method="POST">
                    @csrf
                    <textarea name="text"></textarea>
                    @error('text')
                    <p class = "error-message">{{ $message }}</p>
                    @enderror
                    <button type="submit">Add</button>
                </form>
            </div>
            @foreach($post->comments as $comment)
                <div class = "comment">
                    <div class = "coment-text">
                        <h2>{{ $comment->user->name }}</h2>
                        <p>{{ $comment->text }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
@endsection
