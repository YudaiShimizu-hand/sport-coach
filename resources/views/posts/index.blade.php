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
            <a class="btn btn-outline-primary" href="/posts/create">新規募集ページ</a></br>
            <a class="btn btn-primary mt-3" href="/search">検索ページ</a>
            @foreach ($posts as $post)
            <table class="table table-striped table-hover mt-5">
                <tr>
                    <th>User</th>
                    <th>Coach or Student</th>
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
                        @if($post['coach'] == "Coach")
                            <p class="btn btn-outline-danger">{{ $post->coach }}</p> 
                        @else
                            <p class="btn btn-outline-info">{{ $post->coach }}</p> 
                        @endif
                    </td>
                    <td>
                        <p>{{ $post->category->name }}</p>
                    </td>
                    <td>
                        <a href="/posts/{{ $post->id }}">{{ $post->name }}</a>
                    </td>
                    <td>
                        @if(Auth::user()->id == $post->user_id)
                        <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post" style="display:inline">
                            @csrf
                                <button type="submit">delete</button>
                                @method('DELETE')
                        </form>
                        @endif
                    </td>
                </tr>
            </table>
            @endforeach
            <div class='paginate'>
                {{ $posts->links() }}
            </div>
        </div>
    </body>
</html>
@endsection
