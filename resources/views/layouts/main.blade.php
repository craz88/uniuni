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
	<title>Unibox</title>
	<meta charset="utf-8">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="{{ asset('/css/head.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('/css/main.css') }}" type="text/css">
    @yield('out_code')
</head>
<body>

<form action="" method="post">
      {{ csrf_field() }}

      @component('layouts.head')
      @slot('header')
      @endslot
      @endcomponent
<br>

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


<div class="breadcrumbs">
@yield('bread')
</div>



<ul class="ban">
	@yield('qq')

</ul>

<div class="public">
  @component('side')
      @slot('side')
      @slot('side2')
      @endslot
      @endcomponent
</div>

<div class="place_footer">
{!! $builts->links('vendor.pagination.bootstrap-4'); !!}

<br>

      @component('footer')
      @slot('footer')
      @endslot
      @endcomponent
</div>
</form>
 
</body>
</html>