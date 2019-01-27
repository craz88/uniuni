<?php

namespace App\Http\Controllers;
use App\Login;
use App\Built;
use Input;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function Login() {
     return view('login');
 }

 public function test() {
     return view('test');
 }

 public function New() {
     return view('new');
 }

 public function Next(Request $request) {
     // $jd = $user->id;
    //  dd($jd); id　習得完了
    //$data = $request->session()->all();
     // $request->session()->flush();
     // session(['id'=>"$user->id",'name'=>"$user->name",'pass'=>"$user->pass"]);
     
     
    // $data = session()->get('user');

    $name = $request->name;
    $pass = $request->pass;
    $user = Login::where('name', $name)
    ->where('pass', $pass)->first();
    if (is_null($user)) {
     return view('login',['records'=>'名前かパスワードが間違っているよ']);
 }
    $data = $user->id;
    session(['data'=>"$data"]);
$built = Built::latest()->paginate(4);
    // dd($data);
    return view('main',['data'=>$data,'builts'=>$built]);
 }

 


 public function Main(Request $request) {
    $name = $request->name;
    $pass = $request->pass;
    $user = Login::where('name', $name)
    ->where('pass', $pass)
    ->first();
    // dd($user->toArray());
    if (is_null($user)) {
     $login = new Login();
     $login->name = $name;
     $login->pass = $pass;
     $login->save();
     $data = $login->id;
    session(['data'=>"$data"]);
$built = Built::latest()->paginate(4);
     return view('main',['data'=>$data,'builts'=>$built]);
 }
     return view('new',['records'=>'名前とパスワード両方が誰かとかぶっちったよ']);

}
}
