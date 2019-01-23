@extends('layouts.login')


@section('title','unibox')

@section('action','/main')

@section('button')
<a href="/" class="square_btn">戻る</a>
<span class="null"></span>
<input type="submit" class="square_btn" value="送信" style=" width:88px;" name="">
@endsection