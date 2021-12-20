<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $authUser = Auth::user();
        $authUser->fill($request->all());
        $authUser->save();
        return redirect('/users');
    }
}
