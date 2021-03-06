<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Category;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index')->with(['posts'=>$post->getPaginateByLimit()]);
    }
    public function show(Post $post)
    {
        return view('posts/show')->with(['post'=>$post]);
    }
    public function create(Category $category)
    {
        return view('posts/create')->with(['categories' => $category->get()]);;
    }
    public function store(PostRequest $request, Post $post)
    {
        $input = $request['post'];
        $input += ['user_id' => $request->user()->id, 'coach' => $request['coached']];
        $input += ['coach' => $request['coached']];
        $post->fill($input)->save();
        return redirect('/posts/' . $post->id);
    }
    public function edit(Post $post, Category $category)
    {
        return view('posts/edit')->with(['post' => $post, 'categories' => $category->get()]);
    }
    public function update(PostRequest $request, Post $post)
    {
        $input_post = $request['post'];
        $input_post += ['user_id' => $request->user()->id]; 
        $post->fill($input_post)->save();
        return redirect('/posts/' . $post->id);
    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/posts'); 
    }
}
