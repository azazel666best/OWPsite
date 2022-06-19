@extends('layout.app')
@section('title', 'LOGOTIP')
@section('content')
    @include('.partials.header')
    <main>
        @foreach($posts as $post)
            <a href="{{ route('post', $post->id) }}">
                <div class='article-previve-container'>
                    @if($post->img)
                        <div class='article-previve'>
                            <img src="{{ asset("storage/image/$post->img.png") }}">
                    @else
                        <div class='article-previve previve-without-image'>
                    @endif
                        <div class="previev-text-container">
                            <h2 class='article-title'>{{ $post->title }}</h2>
                            <p class="article-post-date">{{ $post->created_at }}</p>
                        </div>
                    </div>
                </div>
            </a>
        @endforeach
    </main>
@endsection
