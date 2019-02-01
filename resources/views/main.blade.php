@extends('test2')

 @section('header')
<div id="demoslide01" class="main_visual bg_aaa">
  <p><a data-target="modal1" name="modaler" class="modal_open"><img src="{{ asset('img/write.jpeg') }}"></a></p>
</div>

<div id="demoslide01" class="main_visual bg_aaa">
  <p><a data-target="modal2" name="modaler" class="modal_open"><img src="{{ asset('img/search.jpeg') }}"></a></p>
</div>

<div id="demoslide01" class="main_visual bg_aaa">
  <p><a data-target="modal3" name="modaler" class="modal_open"><img src="{{ asset('img/history.jpeg') }}"></a></p>
</div>
 
 
<!-- モーダル1 -->
<div id="modal1" class="modal_box">
  <h2>ウィンドウ1</h2>
  <p style="margin-bottom: -33px;">
    <input type="text" placeholder="Title" required="" name="title" >
<input type="text" placeholder="Contents" required="" name="content" >
<input type="submit" formaction="{{ url('/main_input') }}" value="送信">
  </p>
 
  <div class="link_area" style="overflow: hidden;
    margin: auto 0px;
    text-align: right;">
    <p class="modal_link"><a data-target="modal2" class="modal_switch"><span><img src="{{ asset('img/right.jpeg') }}"></span></a></p>
  </div>
 
  <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
</div>
 
<!-- モーダル2 -->
<div id="modal2" class="modal_box">
  <h2>ウィンドウ2</h2>
 
  <p style=" margin-bottom: -63px;">
    <input type="text" placeholder="key" name="word" id="word">
<a href="/main_key" id="searc">検索</a>
  </p>
  
  <ul>
    <li>
  <div class="link_area" style="overflow: hidden;
    ">
    <p class="modal_link"><a data-target="modal1" class="modal_switch"><span><img src="{{ asset('img/left.jpeg') }}"></span></a></p>
  </div>
  </li>

  <li class="air"></li>
 
 <li>
  <div class="link_area" style="overflow: hidden;
    ">
    <p class="modal_link"><a data-target="modal3" class="modal_switch"><span><img src="{{ asset('img/right.jpeg') }}"></span></a></p>
  </div>
  </li>
  </ul>
 
  <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
</div>
 
<!-- モーダル3 -->
<div id="modal3" class="modal_box">
  <h2>ウィンドウ3</h2>
 <p style=" margin-bottom: -63px;">
   @if (!empty($done_qs))

  @forelse ($done_qs as $done_q)
 <p>{{$done_q->id}}</p>
 <p>{{$done_q->title}}</p>

 @empty

 <p>no data</p>

@endforelse
@endif
  </p>
  <div class="link_area" style="overflow: hidden;
    margin: auto 0px;
    text-align: left;">
    <p class="modal_link"><a data-target="modal2" class="modal_switch"><span><img src="{{ asset('img/left.jpeg') }}"></span></a></p>
  </div>
 
  <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
</div>
@endsection