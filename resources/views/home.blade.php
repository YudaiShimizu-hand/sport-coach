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
        <div class="chat-container row justify-content-center">
            <div class="chat-area">
                <div class="card">
                    <div class="card-header">
                        @foreach ($comments as $comment)
                            @include('components.comment', ['comment' => $comment])
                        @endforeach
                    </div>
                    <div class="card-body chat-card">
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                        @include('components.comment')
                    </div>
                </div>
            </div>
        </div>
        <!--<div class="comment-container row justify-content-center">-->
        <!--    <div class="input-group comment-area">-->
        <!--        <textarea class="form-control" placeholder="input massage" aria-label="With textarea"></textarea>-->
        <!--        <button type="input-group-prepend button" class="btn btn-outline-primary comment-btn">Submit</button>-->
        <!--    </div>-->
        <!--</div>-->
    </body>
</html>
@endsection
