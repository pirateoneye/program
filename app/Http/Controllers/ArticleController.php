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
    public function show($title){
        // die($slug);
        // return view('article.single',['title'=>$slug]);
        $article= Article::where('title',$title)->first();
        return view('article.single',compact('article'));
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
        // $article = new Article;
        // $article->title = $request->title;
        // $article->subject = $request->subject;
        // $article->save();
        Article::create([
            'title'=>$request->title,
            'subject'=>$request->subject,
        ]);

        return redirect('/artikel');
    }

    public function edit($id){
        $article = Article::find($id);
        return view('article.edit',compact('article'));
    }

    public function update(Request $request, $id){

        Article::find($id)->update([
            'title'=> $request->title,
            'subject'=> $request->subject,
        ]);

        // $article = Article::find($id);
        // $article->title = $request->title;
        // $article->subject = $request->subject;
        // $article->save();

        return redirect('/artikel');
    }
    public function destroy($id){

        // dd('hapus' . $id);
        Article::find($id)->delete();
        return redirect("/artikel");
    }
}
