@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>スポコチ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/no-image.css') }}" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="posts-show">
                @if(Auth::user()->id == $post->user_id)
                <div class="posts-show-botton">
                    <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit">delete</button>
                    </form>
                </div>
                @endif
                <div class="posts-show-body mt-5">
                    @if(isset($post->user->image_path))
                        <a href="/users/{{ $post->user->id }}">
                            <img src="{{ $post->user->image_path }}" width=100 height=100 >
                            <h3>{{ $post->user->name }}</h3>
                        </a>
                    @else
                        <a href="/users/{{ $post->user->id }}">
                            <div class="no-image-show"></div>
                            <h3>{{ $post->user->name }}</h3>
                        </a>
                    @endif
                    <p>{{ $post->coach }}</p>
                    <p class="show-category mt-5">{{ $post->category->name }}</p>
                    <h2 class="title mt-3">{{ $post->name }}</h2>
                    <h4 class="body mt-3">{{ $post->body }}</h4>
                </div>
                <div class="footer">
                    <a href="/posts">戻る</a>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection
