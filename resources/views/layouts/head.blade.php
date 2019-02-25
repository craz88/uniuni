<header>

<div id="demoslide01" class="main_visual bg_aaa">
  <a href="{{ url('/main') }}" class="modal_open" style="transform: scale(-1, 1);"><img src="{{ asset('img/back.png') }}"></a>
</div>

<div id="demoslide01" name="ico" class="main_visual bg_aaa">
  <a data-target="modal1" name="modaler" class="modal_open">
  	<img style="cursor: pointer;" src="{{ asset('img/write.png') }}">
  </a>
</div>

<div id="demoslide01" name="ico" class="main_visual bg_aaa">
  <a data-target="modal2" name="modaler" class="modal_open">
  	<img style="cursor: pointer;" src="{{ asset('img/search.jpeg') }}">
</a>
</div>

<div id="demoslide01" class="main_visual bg_aaa">
  <a href="{{ url('/user/history') }}" class="modal_open">
  	<img style="cursor:" src="{{ asset('img/history.png') }}">
</a>
</div>


<div id="demoslide01" class="main_visual bg_aaa">
  <a href="{{ url('/') }}" class="modal_open" style="transform: scale(-1, 1);"><img src="{{ asset('img/log_out.png') }}"></a>
</div>

</header>
<main>
   
<!-- モーダル1 -->
<div id="modal1" class="modal_box"　name="modq1" style="padding: 84px 2vw 200px;">
  <div class="moda1" name="youso" style="margin-top: -30px;">
    <input type="text" placeholder="Title" required="" name="title" class="title_input">
    <br>
    <textarea placeholder="Contents" required="" name="content" class="contents_input"></textarea>
<br>
<input type="submit" formaction="{{ url('/main_input') }}" value="送信" class="button">
  </div>
 
  <div class="link_area" style="overflow: hidden;
    margin-top:-236px;
    text-align: right;">
    <p class="modal_link"><a data-target="modal2" class="modal_switch"><span><img  style="cursor: pointer;" src="{{ asset('img/search.jpeg') }}"></span></a></p>
  </div>
 
  <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
</div>
 
<!-- モーダル2 -->
<div id="modal2" class="modal_box" style="padding: 0px 2vw 78px;">
 <br><br><br><br><br><br>
  <div class="modal2" style="margin-bottom:-52px;">
    <input type="text" placeholder="key" name="word" id="word" class="search_box">
<a href="{{ url('/main_key') }}" id="searc" class="search_button">検索</a>
  </div>

  <div class="link_area" name="ico" style="overflow: hidden;
    ">
    <p class="modal_link"><a data-target="modal1" class="modal_switch"><span><img  style="cursor: pointer; position: relative ;margin-right: 75%;" src="{{ asset('img/write.png') }}"></span></a></p>
  </div>

 
  <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
</div>

</main>