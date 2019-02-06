<?php
use App\Built;
$data = session()->get('data');
$ans=$reps->toArray();
$done_qs = Built::where('member_id',$data)->latest()->take(5)->get();
if (empty($ans)) {
	$ans = 0;
}else{
	$ans = 1;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" type="text/css" href="/css/styl.css">
  <link rel="stylesheet" type="text/css" href="/css/slat.css">
</head>
<body>

<form action="" method="post">
	{{ csrf_field() }}

      @component('head')
      @slot('header')
      @endslot
      @endcomponent
	<br><br>
@if (!empty($done_qs))

	@forelse ($done_qs as $done_q)
 <input type="hidden" name="set" value="{{$done_q->id}}">
 <input type="hidden" name="set1" value="{{$done_q->title}}">
 @empty

 <p></p>

@endforelse
@endif

<div class="content">


<h1>Question</h1>
<br>
 <h2>{{$built->title}}</h2>
<br>
{{$built->contents}}
<br>
{{$built->member_id}}
<br><br><br><br>
<input type="hidden" name="answer_switch" value="0">
<input type="hidden" name="built_id" id="built_id" value="{{$built->id}}">
<br><br><br>



<h2>Answer</h2>
<br>
<ul>
@forelse ($reps as $rep)

<li class="main">
 <p class="create">{{$rep->reply}}</p>
</li>

 @empty

 <p>no data</p>

@endforelse
</ul>
@if ($data == $built->member_id && $ans == 1 && $built->answer_switch == 0)
<input type="submit" formaction="{{ url('/answer') }}" value="解決"> 
@else
....
@endif
<br><br><br><br><br><br>
<input type="text" name="rep">
<br>
<input type="submit" formaction="{{ url('/reply') }}" value="送信">
</div>
</form>


	<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script>
  		$(function(){

     //履歴習得
    for(var i = 0; i < $('[name=set]').length; i++) {
      //mathの中には質問履歴のidが入っている。
       math = document.getElementsByName('set')[i].value;
       done_show = document.getElementsByName("show")[i];
       done_show.setAttribute("href", done_show
        .getAttribute("href") + "/" + math);
    $(done_show).append($('[name=set1]')[i].value);
  }


   
  // 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
  for (var i = 0; $('[name=modaler]').length; i++) {
      modal_open = document.getElementsByName('modaler')[i];
      modal_open.addEventListener('click', function() {

    // 黒い背景をbody内に追加
    $('body').append('<div class="modal_bg"></div>');
    $('.modal_bg').fadeIn();
 
    // data-targetの内容をIDにしてmodalに代入
    var modal = '#' + $(this).attr('data-target');
 
    // モーダルをウィンドウの中央に配置する
    function modalResize(){
        var w = $(window).width();
        var h = $(window).height();
 
        var x = (w - $(modal).outerWidth(true)) / 2;
        var y = (h - $(modal).outerHeight(true)) / 2;
 
        $(modal).css({'left': x + 'px','top': y-50 + 'px'});
    }
 
    // modalResizeを実行
    modalResize();
 
    // modalをフェードインで表示
    $(modal).fadeIn();
 
    // .modal_bgか.modal_closeをクリックしたらモーダルと背景をフェードアウトさせる
    $('.modal_bg, .modal_close').off().click(function(){
        $('.modal_box').fadeOut();
        $('.modal_bg').fadeOut('slow',function(){
            $('.modal_bg').remove();
        });
    });
 
    // ウィンドウがリサイズされたらモーダルの位置を再計算する
    $(window).on('resize', function(){
        modalResize();
    });
 
    // .modal_switchを押すとモーダルを切り替える
    $('.modal_switch').click(function(){
 
      // 押された.modal_switchの親要素の.modal_boxをフェードアウトさせる
      $(this).parents('.modal_box').fadeOut();
 
      // 押された.modal_switchのdata-targetの内容をIDにしてmodalに代入
      var modal = '#' + $(this).attr('data-target');
 
      // モーダルをウィンドウの中央に配置する
      function modalResize(){
          var w = $(window).width();
          var h = $(window).height();
 
          var x = (w - $(modal).outerWidth(true)) / 2;
          var y = (h - $(modal).outerHeight(true)) / 2;
 
          $(modal).css({'left': x + 'px','top': y-50 + 'px'});
      }
 
      // modalResizeを実行
      modalResize();
 
      $(modal).fadeIn();
 
      // ウィンドウがリサイズされたらモーダルの位置を再計算する
      $(window).on('resize', function(){
          modalResize();
      });
    });
  })};
});
  </script>

</body>
</html>