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
            <h2>新規募集</h2>
            <form action="/posts" method="POST">
                @csrf
                <div id="coach">
                    <input name="coached" type="radio" value="Coach"> コーチ
    	            <input name="coached" type="radio" value="Student"> 生徒
	            </div>
                <div class="category mt-3">
                    <h3>スポーツカテゴリー</h3>
                    <select name="post[category_id]">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                    
                </div>
                <div class="name mt-3">
                    <h3>タイトル</h3>
                    <input type="text" name="post[name]" placeholder="タイトル"/>
                    <p class="title__error" style="color:red">{{ $errors->first('post.name') }}</p>
                </div>
                <div class="body">
                    <h3>募集詳細</h3>
                    <textarea name="post[body]" placeholder="詳細"/></textarea>
                    <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                </div>
                <input type="submit" value="保存"/>
            </form>
            <div class="footer">
                <a href="/posts">戻る</a>
            </div>
        </div>
    </body>
</html>
@endsection