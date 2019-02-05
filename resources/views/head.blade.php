<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/styl.css" media="screen" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="js/modal.js"></script>
</head>
 
<body>
 <header>
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
  <div class="moda1" style="margin-top: -30px;">
    <input type="text" placeholder="Title" required="" name="title" class="title_input">
    <br>
    <textarea placeholder="Contents" required="" name="content" class="contents_input"></textarea>
<br>
<input type="submit" formaction="{{ url('/main_input') }}" value="送信" class="button">
  </div>
 
  <div class="link_area" style="overflow: hidden;
    margin-top:-236px;
    text-align: right;">
    <p class="modal_link"><a data-target="modal2" class="modal_switch"><span><img src="{{ asset('img/right.jpeg') }}"></span></a></p>
  </div>
 
  <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
</div>
 
<!-- モーダル2 -->
<div id="modal2" class="modal_box">
 <br><br><br><br><br><br>
  <div class="modal2" style="margin-bottom:-52px;">
    <input type="text" placeholder="key" name="word" id="word" class="search_box">
<a href="/main_key" id="searc" class="search_button">検索</a>
  </div>
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
    <a name="show" href="Q&A"></a>
    <br>
    <a name="show" href="Q&A"></a>
    <br>
    <a name="show" href="Q&A"></a>
    <br>
    <a name="show" href="Q&A"></a>
    <br>
    <a name="show" href="Q&A"></a>
  </p>
 
  <div class="link_area" style="overflow: hidden;
    margin: auto 0px;
    text-align: left;">
    <p class="modal_link"><a data-target="modal2" class="modal_switch"><span><img src="{{ asset('img/left.jpeg') }}"></span></a></p>
  </div>
 
  <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
</div>
</header>
</body>
</html>