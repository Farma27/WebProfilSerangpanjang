<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
// use App\Models\UPTD;
use App\Models\Article;
use App\Models\Agenda;
use App\Models\Announcement;

class UPTDController extends Controller
{
    public function index(){
      try{
        $announcement = Announcement::where('status', 'show')->latest()->limit(5)->get();
        $article = Article::where('status', 'show')->latest()->limit(5)->get();
        $agenda = Agenda::where('status', 'show')->latest()->limit(5)->get();
        // $uptd = UPTD::where(['status'=>'show'])->latest()->paginate(1);
        return view('public.pemerintahan.uptd.list', compact(/* uptd, */'article', 'agenda', 'announcement'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error'=>$error]);
      }
    }
}
