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
    <h1 class="title">編集画面</h1>
    <div class="content">
        <form action="/posts/{{ $post->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="category mt-3">
                <h3>スポーツカテゴリー</h3>
                <select name="post[category_id]">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class='content__title mt-3'>
                <h3>タイトル</h3>
                <input type='text' name='post[name]' value="{{ $post->name }}">
            </div>
            <div class='content__body mt-3 mb-3'>
                <h3>募集詳細</h3>
                <input type='text' name='post[body]' value="{{ $post->body }}">
            </div>
            <input type="submit" value="保存">
        </form>
    </div>
    <div class="footer">
            <a href="/posts">戻る</a>
        </div>
    </div>
    </body>
</html>
@endsection