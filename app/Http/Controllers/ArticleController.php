<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::orderBy('id','desc')-> paginate(5);

        return view('article.index',compact('articles'));
    }
    public function show($slug){
        // die($slug);
        return view('article.single',['title'=>$slug]);
    }
    public function create(){
        return view('article.create');
    }
    public function store(Request $request){

        $request->validate([
            'title' => 'required|max:255|min:3',
            'subject'=> 'required|min:4',
        ]);

        // dd($request);
        $article = new Article;
        $article->title = $request->title;
        $article->subject = $request->subject;
        $article->save();

        return redirect('/artikel');
    }
    public function edit($id){
        $article = Article::find($id);
        return view('article.edit',compact('article'));
    }
}
