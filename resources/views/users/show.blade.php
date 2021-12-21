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
            <div class="title-name mt-5">
                <h3>name</h3>
                <p>{{ $user->name }}</p>
            </div>
            <div class="title-sport">
                <h3>Sport</h3>
                <p>{{ $user->sport }}</p>
            </div>
            <div class="title-profile">
                <h3>Profile</h3>
                <p>{{ $user->profile }}</p>
            </div>
            <div class="footer">
                <a href="/posts">戻る</a>
            </div>
        </div>
    </body>
</html>
@endsection