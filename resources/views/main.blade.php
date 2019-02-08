<?php
use App\Built;
$day = date("Y/m月d日");
$answer = 1;
$done_qs = Built::where('member_id',$data)->latest()->take(5)->get();
// dd($done_qs->toArray());
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="{{ asset('js/ser.js') }}"></script>
	<script src="{{ asset('js/modal.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('/css/main.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('/css/styl.css') }}" type="text/css">
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

<form action="" method="post">
      {{ csrf_field() }}

      @component('head')
      @slot('header')
      @endslot
      @endcomponent

<input type="hidden" placeholder="" required="" name="menber" value="{{$data}}">
<input type="hidden" placeholder="" required="" name="day" value="{{$day}}">

	@if (!empty($done_qs))

	@forelse ($done_qs as $done_q)
 <input type="hidden" name="set" value="{{$done_q->id}}">
 <input type="hidden" name="set1" value="{{$done_q->title}}">
 @empty

 <p></p>

@endforelse
@endif
</div>

      {{$data}}

<ul class="ban">
@forelse ($builts as $built)

<li class="main" style="text-align:initial;">
		<div class="answer">
		@if($built->answer_switch == 1)
		G
		@elseif ($built->answer_switch == 0)
		H
		@else
		out
		@endif
	</div>
	<div class="q_title">
 <a href="{{ url('/Q&A',$built->id) }}" class="title" title="{{$built->title}}">{{$built->title}}</a>
 <p class="create">{{$built->create}}</p>
</div>
</li>

 @empty

 <p>no data</p>

@endforelse
</ul>
{{ $builts->links('') }}

</form>
 
</body>
</html>