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
        <h2 class="show_page">User 情報変更</h2>
        <form method="post" action="/users/" enctype="multipart/form-data">
            @csrf
            <div class="name-form mt-3">
                <div class="labelTitle">Name</div>
                <input type="text" class="userForm" name="name" placeholder="User" value="{{ $authUser->name }}">
            </div>
            <div class="email-form mt-3">
                <div class="labelTitle">Name</div>
                <input type="text" class="userForm" name="email" placeholder="email" value="{{ $authUser->email }}">
            </div>
            <div class="sport-form mt-3">
                <div class="labelTitle">sport</div>
                <input type="text" class="userForm" name="sport" placeholder="sport名" value="{{ $authUser->sport }}">
            </div>
            <div class="profile-form mt-3">
                <div class="labelTitle">profile</div>
                <textarea name="profile" placeholder="プロフィール詳細" value="{{$authUser->profile}}"/></textarea>
            </div>
            <input type="submit" name="send" value="ユーザー変更" class="btn btn-primary btn-sm btn-done">
        </form>
        </div>
    </body>
</html>
@endsection