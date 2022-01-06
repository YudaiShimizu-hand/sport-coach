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
        <div class="media">
            <div class="media-body comment-body">
                <div class="row">
                    <span class="comment-body-user">{{$comment->name}}</span>
                    <span class="comment-body-time">{{$comment->created_at}}</span>
                </div>
                <span class="comment-body-content">
                    {!! nl2br(e($comment->comment)) !!}
                </span>
            </div>
        </div>
        <form method="POST" action="{{route('add')}}">
            @csrf
            <div class="comment-container row justify-content-center">
                <div class="input-group comment-area">
                    <textarea class="form-control" id="comment" name="comment" placeholder="push massage (shift + Enter)"
                        aria-label="With textarea"
                        onkeydown="if(event.shiftKey&&event.keyCode==13){document.getElementById('submit').click();return false};"></textarea>
                    <button type="submit" id="submit" class="btn btn-outline-primary comment-btn">Submit</button>
                </div>
            </div>
        </form>

    </body>
</html>
@endsection