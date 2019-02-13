<?php
use App\Built;
$builts = Built::where('member_id',$data)->latest()->get();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<script src="{{ asset('js/history.js') }}"></script>
	<script src="{{ asset('js/modal.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('/css/head.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('/css/history.css') }}" type="text/css">
</head>
<body>

 @component('head')
      @slot('header')
      @endslot
      @endcomponent
<br>
<div class="breadcrumbs">
{{ Breadcrumbs::render('history') }}
</div>

<h1>Your history</h1>

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
</body>
</html>