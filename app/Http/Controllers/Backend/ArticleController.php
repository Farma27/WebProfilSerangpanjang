<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use SoftDelete;
use Str;
use Auth;

class ArticleController extends Controller
{
    public function index(){
      try{
        $data['post'] = Article::orderBy('created_at', 'DESC')->get();
        return view('admin.postingan.artikel.list', $data);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.article.list')->with(['error' => $error]);
      }
    }

    public function show($id){
      try{
        $data['post'] = Article::where('id', $id)->first();
        return view('admin.postingan.artikel.detail', $data);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.article.list')->with(['error' => $error]);
      }
    }

    public function create(){
      try{
        $data['category'] = Category::where('status','show')->get();
        $data['tag'] = Tag::where('status','show')->get();
        return view('admin.postingan.artikel.create', $data);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.article.list')->with(['error' => $error]);
      }
    }

    public function store(Request $request){
      try{
        // $this->validasiForm($request);
        $data = $this->bindData($request);
        $data['created_by'] = Auth::user()->name;
        $article = Article::create($data);
        $article->tags()->attach($request->tags);
        return redirect()->route('admin.article.list')->with(['success' => 'Data Berhasil Ditambahkan!']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.article.list')->with(['error' => $error]);
        //return $error;
      }
    }

    public function edit($id){
      try{
        $data['article'] = Article::findOrFail($id);
        $data['category'] = Category::where('status','show')->get();
        $data['tag'] = Tag::where('status','show')->get();
        return view('admin.postingan.artikel.edit', $data);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.article.list')->with(['error' => $error]);
      }
    }

    public function update(Request $request){
      try{
        $id = $request->input('id');
        // $this->validasiForm($request);
        $article = Article::where('id',$id)->first();
        $basename1 = basename($article->img);
        $basename2 = basename($article->thumbnail);
        $image = Storage::disk('local')->delete('public/article/images/'.$basename1);
        $thumbnail = Storage::disk('local')->delete('public/article/thumb/'.$basename2);
        $data = $this->bindData($request);
        $data['updated_by'] = Auth::user()->name;
        $article = Article::findOrFail($id);
        $article->tags()->sync($request->tags);
        $article->update($data);
        return redirect()->route('admin.article.list')->with(['success' => 'Data Berhasil Disimpan!']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.article.list')->with(['error' => $error]);
      }
    }

    public function delete(Request $request){
      try{
        $id = $request->input('id');
        $article = Article::findOrFail($id);
        $article->delete();
        return redirect()->route('admin.article.list')->with(['success' => 'Data Telah Masuk Ke Tong Sampah!']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.article.list')->with(['error' => $error]);
      }
    }

    public function trash()
    {
      try{
        $post = Article::orderBy('deleted_at', 'DESC')->onlyTrashed()->get();
        return view('admin.postingan.artikel.trash', compact('post'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.article.list')->with(['error' => $error]);
      }
    }

    public function restore($id)
    {
      try{
        //$id = $request->input('id');
        $post = Article::withTrashed()->where('id',$id)->first();
        $post->restore();
        return redirect()->route('admin.trash.list')->with(['success' => 'Data Berhasil Dipulihkan!']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.trash.list')->with(['error' => $error]);
      }
    }

    public function destroy(Request $request){
      try{
        $id = $request->input('id');
        $article = Article::withTrashed()->where('id',$id)->first();
        $basename1 = basename($article->img);
        $basename2 = basename($article->thumbnail);
        $image = Storage::disk('local')->delete('public/article/images/'.$basename1);
        $thumbnail = Storage::disk('local')->delete('public/article/thumb/'.$basename2);
        $article->tags()->detach($request->tags);
        $article->forceDelete();
        return redirect()->route('admin.trash.list')->with(['success' => 'Data Berhasil Dihapus!']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        //return redirect()->route('admin.trash.list')->with(['error' => $error]);
        return $error;
      }
    }

    public function bindData($request){
      if(!empty($request->id)){
          $article = Article::find($request->id);
      }
      //upload image
      if(!empty($request->file('img'))){
        $image = $request->file('img');
        $img = $image->hashName();
        $image->storeAs('public/article/images', $img);
        //$image->storeAs('public/article/thumb', $img);
      } else {
        $img = null;
      }

      $data = [
            'category_id'       => $request->input('category_id'),
            'title'             => $request->input('title'),
            'slug'              => Str::slug($request->input('title')),
            'short_description' => $request->input('short_description'),
            'content'           => $request->input('content'),
            'img'               => $img,
            'thumbnail'         => $img,
            'status'            => $request->input('status'),
      ];
      return $data;

    }

}
