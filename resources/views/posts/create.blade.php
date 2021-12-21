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
        <h1>スポコチ</h1>
        <h2>新規募集</h2>
        <form action="/posts" method="POST">
            @csrf
            <div class="name">
                <h2>タイトル</h2>
                <input type="text" name="post[name]" placeholder="タイトル"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.name') }}</p>
            </div>
            <div class="body">
                <h2>募集詳細</h2>
                <textarea name="post[body]" placeholder="詳細"/></textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
    </body>
</html>
@endsection