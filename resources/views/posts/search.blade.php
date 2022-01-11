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
            <div class="row">
            <div class="col-md-4">
                <div class="text-center my-4">
                    <h3 class="brown border p-2">ユーザ検索</h3>
                </div>
                <form action="/search" method="POST">
                    @csrf
                    <div class="form-group">
                        <h3>タイトル</h3>
                        <input type="text" name="post[name]" class="form_control" placeholder="指定なし"/>
                    </div>
                    <div class="form-group">
                        <h3>スポーツ</h3>
                        <select name="post[category_id]">
                              <option value="Basketball">Basketball</option>
                              <option value="Valleyball">Valleyball</option>
                              <option value="Handball">Handball</option>
                              <option value="Soccer">Soccer</option>
                         </select>
                    </div>
                    <div class="form-group">
                        <h3>Coach or Student</h3>
                        <select name="post[coach]">
                              <option value="Coach">Coach</option>
                              <option value="Student">Student</option>
                         </select>
                    </div>
                    <input type="submit" value="検索" class="btn btn-primary btn-block"/>
                </form>
            </div>
            <div class="col-md-8">
                <div class="text-center my-4">
                    <h3 class="brown p-2">投稿一覧</h3>
                </div>
                <!--検索ボタンが押された時に表示されます-->
                    @if(!empty($datas))
                        <table class="table table-striped table-hover mt-5">
                            @foreach($datas as $data)
                            <tr>
                                <th>User</th>
                                <th>Coach or Student</th>
                                <th>SportCategory</th>
                                <th>Title</th>
                                <th></th>
                            </tr>
                　　　　        <tr>
                                <td>  
                                     @if(isset($data->user->image_path))
                                        <a href="/users/{{ $data->user->id }}">
                                            <img src="{{ $data->user->image_path }}" width=40 height=40 >
                                            {{ $data->user->name }}
                                        </a>
                                    @else
                                        <a href="/users/{{ $data->user->id }}">
                                            <div class="no-image-index"></div>
                                            {{ $data->user->name }}
                                        </a>
                                    @endif
                                </td>  
                                <td>
                                    {{ $data->coach }} 
                                </td>
                                <td>
                                   {{ $data->category->name }}
                                </td>
                                <td>
                                    {{ $data->name }}
                                </td>
                                <td>
                                    @if(Auth::user()->id == $data->user_id)
                                <form action="/posts/{{ $data->id }}" id="form_{{ $data->id }}" method="post" style="display:inline">
                                    @csrf
                                        <button type="submit">delete</button>
                                        @method('DELETE')
                                </form>
                        @endif
                                </td>
                        @endforeach
                            </tr>
                        </div>
                    @endif
                </div>
            </div>
    </body>
</html>
@endsection
