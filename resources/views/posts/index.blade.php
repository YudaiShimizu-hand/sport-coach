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
            [<a href="/posts/create">新規募集</a>]
            @foreach ($posts as $post)
            <table class="table table-striped table-hover mt-5">
                <tr>
                    <th>User</th>
                    <th>SportCategory</th>
                    <th>Title</th>
                    <th></th>
                </tr>
                <tr>
                    <td>
                        @if(isset($post->user->image_path))
                            <a href="/users/{{ $post->user->id }}">
                                <img src="{{ $post->user->image_path }}" width=40 height=40 >
                                {{ $post->user->name }}
                            </a>
                        @else
                            <a href="/users/{{ $post->user->id }}">
                                <div class="no-image-index"></div>
                                {{ $post->user->name }}
                            </a>
                        @endif
                    </td>
                        <td>
                            <p>{{ $post->category->name }}</p>
                        </td>
                    <td>
                        <a href="/posts/{{ $post->id }}">{{ $post->name }}</a>
                    </td>
                    <td>
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit">delete</button> 
                        </form>
                    </td>
                </tr>
            </table>
            @endforeach 
        </div>
    </body>
</html>
@endsection
