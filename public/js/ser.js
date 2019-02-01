	window.onload=function(){
  var script = document.createElement('script');
  script.src = "x.js";
  script.onload = function() {
    console.log("読み込み完了");
  }
  document.getElementsByTagName("body")[0].appendChild(script);
}

	$(function(){
	$("#searc").click(function(){
 		var word = $("#word").val();
     $("#searc").attr('href',word);
});
});
