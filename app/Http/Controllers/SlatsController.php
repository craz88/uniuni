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
     $reps = $query->get();
     // dd($reps->toArray());
     $data = session()->get('data');
      return view('slat',['built'=>$built,'data'=>$data,'reps'=>$reps]);
      }

      public function Switch(Request $request) {
        $switch = $request->built_id;
     $built1 = Built::findOrFail($switch);
     $built1->update(['answer_switch' => 1]);
       // dd($built->toArray());
     // $query = Answer::query();
     // $query->where('built_id',$switch);
     // $reps = $query->latest()->get();
      // dd($reps->toArray());
     $built = Built::latest()->paginate(8);
     $data = session()->get('data');
      return view('main',['builts'=>$built,'data'=>$data]);
      }

      public function Reply(Request $request) {
     //    $space=$request->rep;
     //    if (empty($space)) {
     //      $built_id=$request->built_id;
     //      $built = Built::findOrFail($built_id);
     //      $query = Answer::query();
     // $query->where('built_id',$built_id);
     // $reps = $query->get();
     //      return back()->withInput()->with(['built'=>$built,'reps'=>$reps]);
     //    }
        $space=$request->rep;
        if (empty($space)) {
          return back()->withInput();
        }
     $built_id=$request->built_id;
     $rep = $request->rep;

     $built = Built::findOrFail($built_id);
     $data = session()->get('data');
     
      $Answer = new Answer();
     $Answer->built_id = $built_id;
     $Answer->member = $data;
     $Answer->reply = $rep;
     $Answer->save();
     
     $query = Answer::query();
     $query->where('built_id',$built_id);
     $reps = $query->get();

      return view('slat',['built'=>$built,'reps'=>$reps]);
 }


}
