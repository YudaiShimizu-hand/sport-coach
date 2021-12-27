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
            <h2 class="show_page">User 一覧</h2>
            <div class="container">
          <table class="table table-striped table-hover">
          <thead>
          <tr>
            <th></th>
            <th>ID</th>
            <th>スポーツ</th>
            <th>名前</th>
            <th></th>
          </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td>{{ $authUser->id }}</td>
              <td>{{ $authUser->sport }}</td>
              <td>{{ $authUser->name }}</td>
              <td>
              
              </td>
            </tr>
          </tbody>
          </table>
        </div>  
                <div class="footer">
                    <a href="/posts">戻る</a>
                </div>
            </body>
        </div>
</html>
@endsection