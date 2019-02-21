@extends('layouts.main')


@section('out_code')
    <script src="{{ asset('js/history.js') }}"></script>
	<script src="{{ asset('js/modal.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('/css/head.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('/css/history.css') }}" type="text/css">
@endsection

@section('bread')
{{ Breadcrumbs::render('history') }}
@endsection

@section('qq')
@forelse ($builts as $built)

<li class="main" style="text-align:initial;">
		<div class="answer">
		@if($built->answer_switch == 1)
		<img style="cursor: pointer;" src="{{ asset('img/check.png') }}">
		@elseif ($built->answer_switch == 0)
		<img style="cursor: pointer;" src="{{ asset('img/q.png') }}">
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

 <div class="push">no data</div>

@endforelse
@endsection