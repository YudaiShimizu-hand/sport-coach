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
        <h2 class="show_page">User 情報変更</h2>
            <div class="row mt-5">
                <div class="col-sm-4">
                    <div class="title-image">
                        <img src="{{ $authUser->image_path }}" width=100 height=100 >
                    </div>
                    <div class="title-name">
                        <h3>name</h3>
                        <p>{{ $authUser->name }}</p>
                    </div>
                    <div class="title-email">
                        <h3>Email</h3>
                        <p>{{ $authUser->email }}</p>
                    </div>
                    <div class="title-sport">
                        <h3>Sport</h3>
                        <p>{{ $authUser->sport }}</p>
                    </div>
                    <div class="title-profile">
                        <h3>Profile</h3>
                        <p>{{ $authUser->profile }}</p>
                    </div>
                </div>
                <div class="col-sm-4">
                <form method="post" action="/users/" enctype="multipart/form-data">
                    @csrf
                    <div class="name-form mt-3">
                        <div class="image">Image</div>
                         <input type="file" name="image">
                    </div>
                    <div class="name-form mt-3">
                        <div class="labelTitle">Name</div>
                        <input type="text" class="userForm" name="name" placeholder="User" value="{{ $authUser->name }}">
                    </div>
                    <div class="email-form mt-3">
                        <div class="labelTitle">Email</div>
                        <input type="text" class="userForm" name="email" placeholder="email" value="{{ $authUser->email }}">
                    </div>
                    <div class="sport-form mt-3">
                        <div class="labelTitle">sport</div>
                        <input type="text" class="userForm" name="sport" placeholder="sport名" value="{{ $authUser->sport }}">
                    </div>
                    <div class="profile-form mt-3">
                        <div class="labelTitle">profile</div>
                        <textarea name="profile" placeholder="プロフィール詳細"/>{{ $authUser->profile }}</textarea>
                    </div>
                    <input type="submit" name="send" value="ユーザー変更" class="btn btn-primary btn-sm btn-done">
                </form>
                </div>
            </div>
        </div>
    </body>
</html>
@endsection