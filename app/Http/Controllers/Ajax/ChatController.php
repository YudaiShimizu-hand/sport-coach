<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\MessageCreated;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index($partner) {// 新着順にメッセージ一覧を取得
        $result = \App\Message::orderBy('id', 'desc')
        ->where(function($query) use($partner){
            $query->where('send', Auth::id())
            ->where('recieve', $partner);
        })
        ->orwhere(function($query) use($partner){
            $query->where('send', $partner)
            ->where('recieve', Auth::id());
        })->get();
        // })->toSql();
        // dd($result);
        return $result;
    }
    
    public function create(Request $request) { // メッセージを登録
        
        $message = \App\Message::create([
            'body' => $request->message,
            'recieve'=> $request->partner,
            'send' => Auth::id()
        ]);
        event(new MessageCreated($message));
    }
}
