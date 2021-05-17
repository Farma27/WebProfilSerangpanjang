<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Storage;
use App\Models\Website;
use App\Models\SocialMedia;
use Str;
use Auth;

class WebsiteController extends Controller
{
    public function index(){
      try{
        $fetch = Website::latest()->first();

        return view('admin.website', compact('fetch'));
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error'=>$error]);
      }
    }

    public function simpan(Request $request){
      try{
        $website = Website::latest()->first();

        if( $request->file('logo') == null ) {
          if($website->logo){
            $img = $website->logo;
          }else{
            $img = null;
          }
        } else {
          $logo = $request->file('logo');
          $img = $logo->hashName();
          $baselogo = basename($website->logo);
          $logopic = Storage::disk('local')->delete('public/website/'.$baselogo);
          $logo->storeAs('public/website/', $img);
        }

        if( $request->file('favicon') == null ) {
          if($website->favicon){
            $favicon= $website->favicon;
          }else{
            $favicon = null;
          }
        } else {
          $icon = $request->file('favicon');
          $favicon = $icon->hashName();
          $baseicon = basename($website->favicon);
          $iconpic = Storage::disk('local')->delete('public/website/'.$baseicon);
          $icon->storeAs('public/website/', $favicon);
        }

        $data = [
            'name'        => $request->input('name'),
            'phone'       => $request->input('phone'),
            'fax'         => $request->input('fax'),
            'email'       => $request->input('email'),
            // 'favicon'     => $favicon,
            // 'logo'        => $img,
            'tagline'     => $request->input('tagline'),
            'description' => $request->input('description'),
            'address'     => $request->input('address'),
            'updated_by'  => Auth::user()->name,
        ];

        if(empty($website)){
            $website = Website::create($data);
        }else{
            $website->update($data);
        }
        return redirect()->back()->with(['success'=> 'Data Berhasil Disimpan']);
      }catch(\Exception $e){
        $error = $e->getMessage();
        return redirect()->back()->with(['error' => html_entity_decode($error)]);
      }
    }

}
