<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Category;

class SearchController extends Controller
{
    
    public function index(){
        return view('posts.search');
    }
    
    public function search(Post $post, Request $request, Category $category){
        $query = Post::query();
        //$request->input()で検索時に入力した項目を取得します。
        // dd($request);
        $input = $request['post'];
        $search1 = $input['name'];
        $search2 = $input['coach'];
        $search3 = $input['category_id'];
        $search3 = $category->where('name',$search3)->value('id');
        // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した棋力と一致するカラムを取得します
      
        $datas = $query->where('name', 'like', '%'.$search1.'%')->where('coach', $search2)->where('category_id', $search3)->get();
        
        // if ($request->has('category') && $search1 != ('指定なし')) {
        //     $query->where('category', $search1)->get();
        // }

        // プルダウンメニューで指定なし以外を選択した場合、$query->whereで選択した好きな戦法と一致するカラムを取得します
        
        // if ($request->has('coach') && $search2 != ('指定なし')) {
        //     $query->where('coach', $search2)->get();
        // }

        // ユーザ名入力フォームで入力した文字列を含むカラムを取得します
        
        // if ($request->has('name') && $search3 != '') {
        //     $query->where('name', 'like', '%'.$search3.'%')->get();
        // }
        //ユーザを1ページにつき10件ずつ表示させます
        return view('posts.search',[
            'datas' => $datas
        ]);
    }
    
}
