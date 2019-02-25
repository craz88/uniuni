<?php
use App\Built;
$data = session()->get('data');
$ans=$reps->toArray();
if (!empty($data)) {
     $session=1;
}else{
	$session=0;
}
if (empty($ans)) {
	$ans = 0;
}else{
	$ans = 1;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>{{$built->title}}</title>
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="{{ asset('js/slat.js') }}"></script>
	<script src="{{ asset('js/modal.js') }}"></script>
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="{{ asset('/css/head.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('/css/slat.css') }}" type="text/css">
</head>
<body>

<form action="" method="post">
	{{ csrf_field() }}
  <div class="wrap">
      @component('layouts.head')
      @slot('header')
      @endslot
      @endcomponent
	


<input type="hidden" name="answer_switch" value="0">
<input type="hidden" name="built_id" id="built_id" value="{{$built->id}}">

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


<textarea  name="rep" placeholder="Your answer" class="rep"></textarea>
<br>
@if ($session != 0)
<div class="center"><input type="submit" formaction="{{ url('/reply') }}" value="answer" class="button"></div>
@else
<div class="center"><a href="{{ url('/new') }}" class="login_button">Login</a></div>
@endif
</div>


<div class="public">
  @component('side')
      @slot('side')
      @slot('side2')
      @endslot
      @endcomponent
</div>
</div>
 <div class="place_footer">
<br>
      @component('footer')
      @slot('footer')
      @endslot
      @endcomponent
</div>
</form>
</body>
</html>