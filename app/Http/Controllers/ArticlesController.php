<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;


class ArticlesController extends Controller
{
    public function index(){
        $articles= Article::all();
        return view('articles/index',['articles'=> $articles]);
    }
    public function create(){
        return view('articles/create');
    }

    public function store(Request $request){
        $total=$request->validate([
            'title'=>'required',
            'content'=>'required|min:10'
        ]);
        Article::create($total);
        return redirect()->route(route:'root')->with('notice','文章創建成功!');
    }
}
