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
            <h1 class="p-3 mb-2 bg-success text-white mt-5">スポーツコーチ</h1>
            <h4 class="p-3 mb-2 bg-secondary text-white mt-4">
                スポーツのコーチングを行うアプリケーションです。
            </br>
                スポーツを教えたい人、教えて欲しい人は気軽に投稿しましょう。
            </br>
                チャットが送れるのでチャットを送ってみよう!
            </h4>
            <h4 class="p-3 mb-2 bg-success text-white mt-4">あなたの目標を叶えるサイトです。</h4>
            <h1 class="p-3 mb-2 bg-danger text-white mt-4">目指せNO,1</h1>
        </div>
    </body>
</html>
@endsection
