<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Website;
use App\Models\Field;
use App\Models\Staff;
use App\Models\Inbox;
use App\Models\Article;
use App\Models\Category;
use App\Models\Tag;
use App\Models\Agenda;
use App\Models\Announcement;

class HomeController extends Controller
{
    public function singlePage(){
      return view('public.single');
    }
    public function listPage(){
      $tags = Tag::where('status', 'show')->get();
      $category = Category::where('status', 'show')->get();
      $articles = Article::where('status', 'show')->latest()->limit(5)->get();
      $post = Article::where('status', 'show')->latest()->paginate(10);
      return view('public.list', compact('category', 'tags', 'articles', 'post'));
    }

    public function index(){
      try{
        return view('public.index');
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('public.homepage')->with(['error' => $error]);
      }
    }

    public function contactUs(){
      try{
        return view('public.contact');
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('public.homepage')->with(['error' => $error]);
      }
    }

    public function sendMessage(Request $request){
      try{
        $data = [
              'name'      => $request->input('name'),
              'address'   => $request->input('address'),
              'email'     => $request->input('email'),
              'subject'   => $request->input('subject'),
              'message'   => $request->input('message'),
              'status'    => "unread"
        ];
        $inbox = Inbox::create($data);
        return redirect()->route('public.contact')->with(['success' => 'Pesan Berhasil Dikirim!']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('public.homepage')->with(['error' => $error]);
      }
    }

    public function field(){
      try{
        $fetch = Field::where('status', 'show')->get();
        return view('public.profil.bidang', compact('fetch'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error' => $error]);;
      }
    }

    public function staff($slug){
      try{
        $bidang = Field::where('slug', $slug)->first();
        $fetch = Staff::where(['field_id'=>$bidang->id, 'status'=>'show'])->get();
        return view('public.profil.pegawai', compact('fetch'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error' => $error]);;
      }
    }

    public function history() {
      return view('public.profil.sejarah');
    }

    public function vision() {
      return view('public.profil.visimisi');
    }

    public function topografi() {
      return view('public.profil.topografi');
    }

    public function maps() {
      return view('public.profil.peta');
    }
    
    public function village() {
      return view('public.pemerintahan.village');
    }

    public function uptd() {
      return view('public.pemerintahan.uptd');
    }

    public function vacation() {
      // try{
      //   $announcement = Announcement::where('status', 'show')->latest()->limit(5)->get();
      //   $article = Article::where('status', 'show')->latest()->limit(5)->get();
      //   $agendas = Agenda::where('status', 'show')->latest()->limit(5)->get();
      //   return view('public.wisata.objek', compact('article', 'agenda', 'announcement'));
      // }catch(\Exception $e){
      //   $error = $e->getMessage();
      //   return redirect()->back()->with(['error'=>$error]);
      // }

      return view('public.wisata.objek');
    }
    public function culture() {
      return view('public.wisata.culture');
    }

    public function sport() {
      return view('public.wisata.sport');
    }

    public function hotel() {
      return view('public.wisata.hotel');
    }

    public function rm() {
      return view('public.wisata.makanan');
    }
}