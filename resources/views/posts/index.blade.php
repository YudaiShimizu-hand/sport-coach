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
            <h1>スポコチ</h1>
            [<a href="/posts/create">新規募集</a>]
            {{Auth::user()->name}}
            @foreach ($posts as $post)
            <h2 class="title">
                <a href="/posts/{{ $post->id }}">{{ $post->name }}</a>
            </h2>
            <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button> 
            </form>
            @endforeach 
        </div>
    </body>
</html>
@endsection
