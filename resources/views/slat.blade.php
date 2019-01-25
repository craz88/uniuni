<?php
$data = session()->get('data');
$ans=$reps->toArray();

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
</head>
<body>

<form action="" method="post">
	{{ csrf_field() }}

	<br><br>

<h1>Question</h1>
{{$built->title}}
<br>
{{$built->contents}}
<br>
{{$built->member_id}}
<br><br><br><br>
<input type="hidden" name="answer_switch" value="0">
<input type="hidden" name="built_id" id="built_id" value="{{$built->id}}">
<br><br><br>

<h1>Answer</h1>
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
@if ($data == $built->member_id && $ans == 1)
<a href="" id="sss">解決</a> 
@else
....
@endif
<br><br><br><br><br><br>
<input type="text" name="rep">
<br>
<input type="submit" formaction="{{ url('/reply') }}" value="送信">
</form>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
 <script>

 	$("#sss").click(function(){
 		var swit = $("#built_id").val();
     $("#sss").attr('href','/answer/'+swit);
});
 </script>
</body>
</html>