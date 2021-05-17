<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inbox;

class FrontController extends Controller
{
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
}
