<?php

namespace App\Http\Controllers;
use App\Built;
use App\Answer;
use Illuminate\Http\Request;

class SlatsController extends Controller
{
    public function Slat($id) {
     $built = Built::findOrFail($id);

     $query = Answer::query();
     $query->where('built_id',$id);
     $reps = $query->latest()->get();

     $data = session()->get('data');

      return view('slat',['built'=>$built,'data'=>$data,'reps'=>$reps]);
      }

      public function Reply(Request $request) {
     $built_id=$request->built_id;
     $rep = $request->rep;
     $answer_switch = 1;

     $built = Built::findOrFail($built_id);
     $data = session()->get('data');
     
     

      $Answer = new Answer();
     $Answer->built_id = $built_id;
     $Answer->member = $data;
     $Answer->reply = $rep;
     $Answer->answer_switch = $request->answer_switch;
     $Answer->save();
     
     $query = Answer::query();
     $query->where('built_id',$built_id);
     $reps = $query->latest()->get();

      return view('slat',['built'=>$built,'reps'=>$reps,'data'=>$data]);
 }


}
