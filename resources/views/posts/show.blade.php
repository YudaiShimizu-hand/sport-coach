@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>スポコチ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
            <p>{{$post->user->name}}</p>
            <h2 class="title">{{ $post->name }}</h2>
            <p class="body">{{ $post->body }}</p>
            <div class="footer">
                <a href="/posts">戻る</a>
            </div>
        </div>
    </body>
</html>
@endsection
