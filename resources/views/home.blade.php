@extends('layouts.app')

@section('content')

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

    <div class="comment-container row justify-content-center">
    <div class="input-group comment-area">
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
        </div>
</div>
@endsection
