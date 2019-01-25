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
<input type="hidden" name="built_id" value="{{$built->id}}">
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
<input type="button" name="" value="成功だぜ！">
@else
....
@endif
<br><br><br><br><br><br>
<input type="text" name="rep">
<br>
<input type="submit" formaction="{{ url('/reply') }}" value="送信">
</form>

</body>
</html>