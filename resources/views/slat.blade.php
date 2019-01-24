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
<br><br><br><br><br><br>
<input type="text" name="rep">
<br>
<input type="submit" formaction="{{ url('/reply') }}" value="送信">
</form>

</body>
</html>