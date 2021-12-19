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
        <h2 class="my_page">My Page</h2>
        <div class="table">
            <div class="table-list">
                name:  <span>{{$auth->name}}</span><br>
                email:  <span>{{$auth->email}}</span><br>
                sport:  <span>{{$auth->sport}}</span><br>
                profile  <span>{{$auth->profile}}</span><br>
            </div>
        </div>
        <div class="footer">
            <a href="/posts">戻る</a>
        </div>
    </body>
</html>
@endsection