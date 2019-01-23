<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h1>困っていること</h1>
{{$built->title}}
<br>
{{$built->contents}}
<br><br><br><br>
<input type="hidden" name="answer_switch" value="0">
<input type="hidden" name="built_id" value="{{$built->id}}">
<br><br><br>
<ul>

</ul>
<br><br><br><br><br><br>
<input type="text" name="reply">
<br>
<input type="submit" formaction="{{ url('/reply') }}" name="" value="送信">

</body>
</html>