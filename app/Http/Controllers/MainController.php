<?php

namespace App\Http\Controllers;
use App\Built;
use Input; 
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Main_input(Request $request) {
     $data = $request->menber;
     $answer_switch = 0;

     $Built = new Built();
     $Built->member_id = $data;
     $Built->title = $request->title;
     $Built->contents = $request->content;
     $Built->answer_switch = $answer_switch;
     $Built->create = $request->day;
     $Built->save();
     
     $built = Built::latest()->paginate(18);
     return view('main',['data'=>$data],['builts'=>$built]);
 }

  public function Serch_Paging($word) {
      $buil = Built::where('title','LIKE','%'.$word.'%')->orWhere('contents','LIKE','%'.$word.'%');
     $built = $buil->latest()->paginate(18);
     $data = session()->get('data');
     return view('main',['builts'=>$built,'data'=>$data]);
 }

 public function Paging() {
    
    $data = session()->get('data');
    // dd($data);
    $built = Built::latest()->paginate(18);
    // dd($data);
    return view('main',['data'=>$data,'builts'=>$built]);
 }


public function User_history() {
    $data = session()->get('data');
     return view('history',['data'=>$data]);
 }

public function S() {
     return view('footer');
 }
 //    public function Main_key() {
 //        $word = Input::get('word');
 //        dd($word);
 //     $buil = Built::where('title','LIKE','%'.$request->word.'%')->orWhere('contents','LIKE','%'.$request->word.'%');
 //     $built = $buil->latest()->paginate(4);
 //     $data = session()->get('data');
 //     return view('main',['builts'=>$built,'data'=>$data]);
 // }


 //    public function Main_key(Request $request) {
 //     $buil = Built::where('title','LIKE','%'.$request->word.'%')->orWhere('contents','LIKE','%'.$request->word.'%');
 //     $built = $buil->latest()->paginate(4);
 //     $data = session()->get('data');
 //     return view('main',['builts'=>$built,'data'=>$data]);
 // }

}
