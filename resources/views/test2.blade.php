<!DOCTYPE html>
<html>
<head>
 
  <link rel="stylesheet" type="text/css" href="css/styl.css" media="screen" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
  <script>
  	$(function(){
   
  // 「.modal_open」をクリックしたらモーダルと黒い背景を表示する
  for (var i = 0; i < 4; i++) {
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
 
        $(modal).css({'left': x + 'px','top': y + 'px'});
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
 
          $(modal).css({'left': x + 'px','top': y + 'px'});
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
  
</head>
 
<body>
 
<div id="demoslide01" class="main_visual bg_aaa">
  <p><a data-target="modal1" name="modaler" class="modal_open"><img src="{{ asset('img/search.jpeg') }}"></a></p>
</div>

<div id="demoslide01" class="main_visual bg_aaa">
  <p><a data-target="modal2" name="modaler" class="modal_open"><img src="{{ asset('img/search.jpeg') }}"></a></p>
</div>

<div id="demoslide01" class="main_visual bg_aaa">
  <p><a data-target="modal3" name="modaler" class="modal_open"><img src="{{ asset('img/search.jpeg') }}"></a></p>
</div>
 
 
<!-- モーダル1 -->
<div id="modal1" class="modal_box">
  <h2>ウィンドウ1</h2>
  <p>モーダルウィンドウが開きました。</p>
 
  <div class="link_area">
    <p class="modal_link"><a data-target="modal2" class="modal_switch"><span>ウィンドウ2へ</span></a></p>
  </div>
 
  <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
</div>
 
<!-- モーダル2 -->
<div id="modal2" class="modal_box">
  <h2>ウィンドウ2</h2>
 
  <p>あのイーハトーヴォのすきとおった風、<br />夏でも底に冷たさをもつ青いそら、うつくしい森で飾られたモリーオ市、<br />郊外のぎらぎらひかる草の波。<br />　<br />この様にウィンドウの高さが違う場合でも<br />この様に表示することができます。</p>
 
  <div class="link_area">
    <ul>
      <li class="modal_link"><a data-target="modal1" class="modal_switch"><span>ウィンドウ1へ</span></a></li>
      <li class="modal_link"><a data-target="modal3" class="modal_switch"><span>ウィンドウ3へ</span></a></li>;
    </ul>
  </div>
 
  <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
</div>
 
<!-- モーダル3 -->
<div id="modal3" class="modal_box">
  <h2>ウィンドウ3</h2>
 
  <div class="link_area">
    <p class="modal_link"><a data-target="modal2" class="modal_switch><span>ウィンドウ2へ</span></a></p>
  </div>
 
  <p><a class="modal_close"><i class="zmdi zmdi-close"></i></a></p>
</div>
 <style type="text/css">
  	.modal_open{
    display: inline-block;
    margin: 3vw;
    float: left; 
}
 
.modal_box {
    position: fixed;
    z-index: 7777;
    display: none;
    width: 80%;
    max-width: 840px;
    margin: 0;
    padding: 60px 2vw 80px;
    border: 2px solid #aaa;
    text-align: center;
    background: #fff;
    box-sizing: border-box;
}
 
.modal_close {
    position: absolute;
    top: 0;
    right: 0;
    display: block;
    width: 62px;
    font-size: 46px;
    color: #000;
    line-height: 62px;
    text-align: center;
    background: #e6e6e6;
}
 
.modal_close i {
    line-height: 62px;
    vertical-align: bottom;
}
 
.modal_bg {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 6666;
    display: none;
    width: 100%;
    height: 120%;
    background-color: rgba(0,0,0,0.7);
}
 
.link_area {
    overflow: hidden;
    max-width: 410px;
    margin: 60px auto 0;
    text-align: center;
}
 
.link_area .modal_link {
    display: inline;
}
 
.link_area .modal_link a {
    display: inline-block;
    width: 180px;
    color: #000;
    line-height: 2.5;
    text-decoration: none;
    margin: 0 10px;
    background: #e6e6e6;
}
 
.link-area ul li.modal_link:first-child a {
    float: left;
}
 
.link-area ul li.modal_link:last-child a {
    float: right;
}
 
 
@media screen and (max-width: 769px) {
 
/*  ウィンドウサイズ769px以下の時のスタイル  */
 
  .modal_box {
      padding: 50px 2vw 40px;
  }
 
  .modal_close {
      width: 40px;
      line-height: 40px;
      font-size: 30px;
  }
 
  .modal_close i {
      line-height: 44px;
  }
 
  .link_area {
      margin: 25px auto 0;
  }
 
  .link_area .modal_link a {
      margin: 15px auto 0;
  }
 
  .link_area ul li.modal_link:first-child a {
      float: none;
      margin-top: 0;
  }
 
  .link_area ul li.modal_link:last-child a {
      float: none;
  }
 
}
  </style>
</body>
</html>