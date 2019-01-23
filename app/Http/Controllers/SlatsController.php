<?php

namespace App\Http\Controllers;
use App\Built;
use App\Answer;
use Illuminate\Http\Request;

class SlatsController extends Controller
{
    public function Slat($id) {
      $built = Built::findOrFail($id);
     $data = session()->get('data');
     $replys="s";
      return view('slat',['built'=>$built,'data'=>$data,'replys'=>$replys]);
      }

      public function Reply(Request $request) {
     $data = session()->get('data');
     $reply = $request->reply;
     
      $Answer = new Answer();
     $Answer->built_id = $request->built_id;
     $Answer->reply = $reply;
     $Answer->answer_switch = $request->answer_switch;
     $Answer->save();
      return view('slat',['replys'=>$reply,'data'=>$data]);
 }


}
