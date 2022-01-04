<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index(Request $request)
    {
       $authUser = Auth::user();
       $users = User::all();
       $param = [
            'authUser'=>$authUser,
            'users'=>$users
        ];
        return view('users/index',$param);
    }
    public function edit(Request $request)
    {
        $authUser = Auth::user();
        $param = [
            'authUser'=>$authUser,
        ];
        return view('users/edit',$param);
    }
    public function update(Request $request)
    {
        $authUser->fill($request->all());
        $image = $request->file('image');
        $path = Storage::disk('s3')->putFile('myprefix', $image, 'public');
        $authUser->image_path = Storage::disk('s3')->url($path);
        $authUser->save();
        return redirect('/users/edit');
    }
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }
}
