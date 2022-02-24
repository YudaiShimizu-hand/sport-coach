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
            <div class="title-image mt-5">
                @if(isset($user->image_path))
                        <img src="{{ $user->image_path }}" width=100 height=100 >
                @else
                        <div class="no-image-show"></div>
                @endif
            </div>
            <div class="title-name mt-3">
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
            <td><a href="/chat/{{$user->id}}"><button type="button" class="btn btn-primary">Chat</button></a></td>
            <div class="footer">
                <a href="/">戻る</a>
            </div>
        </div>
    </body>
</html>
@endsection
