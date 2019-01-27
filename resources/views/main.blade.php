<?php
use App\Built;
$day = date("Y/m月d日");
$answer = 1;
$done_qs = Built::where('member_id',$data)->get();
// dd($done_qs->toArray());
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
</head>
<body>

<form action="" method="post">
      {{ csrf_field() }}
      {{$data}}
<input type="hidden" placeholder="" required="" name="menber" value="{{$data}}">
<input type="hidden" placeholder="" required="" name="day" value="{{$day}}">
<input type="text" placeholder="Title" required="" name="title" >
<input type="text" placeholder="Contents" required="" name="content" >
<input type="submit" formaction="{{ url('/main_input') }}" value="送信">

<input type="text" placeholder="key" name="word" id="word">
<a href="/main_key" id="searc">検索</a>
<!-- <input type="submit" formaction="{{ url('/main_key') }}" value="送信"> -->
<br>
<div class="right">

	@if (!empty($done_qs))

	@forelse ($done_qs as $done_q)
 <p>{{$done_q->id}}</p>
 <p>{{$done_q->title}}</p>

 @empty

 <p>no data</p>

@endforelse
@endif
</div>


<ul class="ban">
@forelse ($builts as $built)

<li class="main">
	<div class="answer">
		@if($built->answer_switch == 1)
		G
		@elseif ($built->answer_switch == 0)
		H
		@else
		out
		@endif
	</div>
 <a href="{{ url('/Q&A',$built->id) }}" class="title" title="{{$built->title}}">{{$built->title}}</a>
 <p class="create">{{$built->create}}</p>
</li>

 @empty

 <p>no data</p>

@endforelse
</ul>
{{ $builts->links('') }}

</form>
 <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
 <script>

 	$("#searc").click(function(){
 		var word = $("#word").val();
     $("#searc").attr('href',word);
});
 </script>
</body>
</html>