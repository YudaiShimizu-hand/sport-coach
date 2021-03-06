<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware' => 'auth'], function() {
    // Route::get('/users', 'UserController@index');
    Route::get('/users/edit', 'UserController@edit');
    Route::put('/users/update', 'UserController@update');
    Route::get('/users/{user}', 'UserController@show');

    Route::get('/posts', 'PostController@index');
    Route::get('/posts/create', 'PostController@create');
    Route::get('/posts/{post}/edit', 'PostController@edit');
    Route::put('/posts/{post}', 'PostController@update');
    Route::get('/posts/{post}', 'PostController@show');
    Route::delete('/posts/{post}', 'PostController@delete');

    Route::post('/posts/', 'PostController@store');
    
    Route::get('chat/{partner}', 'ChatController@index');
    // Route::post('/chat/send/{partner}' , 'ChatController@store');
    Route::get('ajax/chat/{partner}', 'Ajax\ChatController@index'); // メッセージ一覧を取得
    Route::post('ajax/chat/{partner}', 'Ajax\ChatController@create'); // チャット登録
        
    Route::get('/search','SearchController@index');
    Route::post('/search', 'SearchController@search')->name('search');
});

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::post('/add', 'HomeController@add')->name('add');

// Route::get('/search','SearchController@index');
// Route::post('/search', 'SearchController@search')->name('search');


Auth::routes();
        Route::get('/home', 'HomeController@index')->name('home');

Route::get('login/google', 'Auth\LoginController@redirectToGoogle');
Route::get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('/', 'HomeController@top');