<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Announcement;
use Str;
use Auth;

class AnnouncementController extends Controller
{

    public function index(){
      try{
        $data['announcement'] = Announcement::orderBy('created_at', 'DESC')->get();
        return view('admin.pengumuman.list', $data);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.announcement.list')->with(['error' => $error]);
      }
    }

    public function show($id){
      try{
        $announce = Announcement::findOrFail($id);
        return view('admin.pengumuman.detail', compact('announce'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.announcement.list')->with(['error' => $error]);
      }
    }

    public function create(){
      try{
        return view('admin.pengumuman.create');
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.announcement.list')->with(['error' => $error]);
      }
    }

    public function store(Request $request){
      try{

        $data = $this->bindData($request);
        $data['created_by'] = Auth::user()->name;
        $announce = Announcement::create($data);
        return redirect()->route('admin.announcement.list')->with(['success' => 'Data Berhasil Ditambahkan!']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.announcement.list')->with(['error' => $error]);
      }
    }

    public function edit($id){
      try{
        $announcement = Announcement::findOrFail($id);
        return view('admin.pengumuman.edit', compact('announcement'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.announcement.list')->with(['error' => $error]);
      }
    }

    public function update(Request $request){
      try{
        $id = $request->input('id');
        $announce = Announcement::where('id',$id)->first();
        $basenameImg = basename($announce->img);
        $basenameFile = basename($announce->file);
        $image = Storage::disk('local')->delete('public/announcement/images/'.$basenameImg);
        $doc = Storage::disk('local')->delete('public/announcement/files/'.$basenameFile);
        $data = $this->bindData($request);
        $data['updated_by'] = Auth::user()->name;
        $announce = Announcement::findOrFail($id);
        $announce->update($data);
        return redirect()->route('admin.announcement.list')->with(['success' => 'Data Berhasil Disimpan!']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.announcement.list')->with(['error' => $error]);
      }
    }

    public function delete(Request $request){
      try{
        $id = $request->input('id');
        $announce = Announcement::find($id);
        $basenameImg = basename($announce->img);
        $basenameFile = basename($announce->file);
        $image = Storage::disk('local')->delete('public/announcement/images/'.$basenameImg);
        $file = Storage::disk('local')->delete('public/announcement/files/'.$basenameFile);
        $announce->delete();
        return redirect()->route('admin.announcement.list')->with(['success' => 'Data Berhasil Dihapus!']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->route('admin.announcement.list')->with(['error' => $error]);
      }
    }

    public function bindData($request){
      if(!empty($request->id)){
          $agenda = Announcement::find($request->id);
      }
      //upload image
      if(!empty($request->file('img'))){
        $image = $request->file('img');
        $img = $image->hashName();
        $image->storeAs('public/announcement/images', $img);
      } else {
        $img = null;
      }
      //upload file
      if(!empty($request->file('file'))){
        $dok = $request->file('file');
        $file = $dok->hashName();
        $dok->storeAs('public/announcement/files', $file);
      } else {
        $file = null;
      }
      $data = [
            'title'             => $request->input('title'),
            'slug'              => Str::slug($request->input('title')),
            'description'       => $request->input('description'),
            'img'               => $img,
            'thumbnail'         => $img,
            'file'              => $file,
            'status'            => $request->input('status'),
      ];
      return $data;
    }

}
