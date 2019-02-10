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
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="{{ asset('js/slat.js') }}"></script>
	<script src="{{ asset('js/modal.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('/css/styl.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('/css/slat.css') }}" type="text/css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<form action="" method="post">
	{{ csrf_field() }}

      @component('head')
      @slot('header')
      @endslot
      @endcomponent
	


<input type="hidden" name="answer_switch" value="0">
<input type="hidden" name="built_id" id="built_id" value="{{$built->id}}">

@if (!empty($done_qs))

	@forelse ($done_qs as $done_q)
 <input type="hidden" name="set" value="{{$done_q->id}}">
 <input type="hidden" name="set1" value="{{$done_q->title}}">
 @empty


@endforelse
@endif
<br>
<div class="breadcrumbs">
{{ Breadcrumbs::render('slat') }}
</div>
<div class="content">


<h1>{{$built->title}}</h1>
<br>
<p>{!! nl2br(e($built->contents)) !!}</p>
<br>

<ul class="answer">
@forelse ($reps as $rep)

<h1>Answer</h1>
<br>
<li class="main">
 <p class="create">{!! nl2br(e($rep->reply)) !!}</p>
</li>

 @empty

 <p>・回答を待ちましょう！</p>
 <br><br>

@endforelse
</ul>
@if ($data == $built->member_id && $ans == 1 && $built->answer_switch == 0)
<input type="submit" formaction="{{ url('/answer') }}" value="解決" class="solve"> 
@else

@endif
<textarea name="rep" placeholder="Your answer" class="rep"></textarea>
<br>
<input type="submit" formaction="{{ url('/reply') }}" value="answer" class="button">
</div>
</form>

<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>
<br><br><br><br><br><br><br><br><br><br><br><br>


</body>
</html>