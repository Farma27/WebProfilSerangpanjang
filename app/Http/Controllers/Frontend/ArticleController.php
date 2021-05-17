<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Models\Announcement;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Comment;

class ArticleController extends Controller
{
    public function index(){
      try{
        $tags = Tag::where('status', 'show')->get();
        $category = Category::where('status', 'show')->get();
        $agenda = Agenda::where('status', 'show')->latest()->limit(5)->get();
        $post = Article::where('status', 'show')->latest()->paginate(12);
        return view('public.artikel.list', compact('category', 'tags', 'agenda', 'post'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error' => $error]);
      }
    }

    public function show($slug){
      try{
        $article = Article::where('slug', $slug)->first();
        $updateHit = Article::where('id', $article->id)->update(['hit'=> $article->hit + 1]);
        $tags = Tag::where('status', 'show')->get();
        $category = Category::where('status', 'show')->get();
        $agenda = Agenda::where('status', 'show')->latest()->limit(5)->get();
        $comment = Comment::where(['article_id'=>$article->id, 'status'=>'show'])->latest()->get();
        return view('public.artikel.detail', compact('category', 'tags', 'agenda', 'article', 'comment'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error' => $error]);
      }
    }

    public function sendComment(Request $request){
      try{
        $data = [
              'name'        => $request->input('name'),
              'email'       => $request->input('email'),
              'comment'     => $request->input('comment'),
              'article_id'  => $request->input('article_id')
        ];
        $inbox = Comment::create($data);
        return redirect()->back()->with(['success' => 'Komentar Berhasil Ditambahkan!']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error' => $error]);
      }
    }
}
