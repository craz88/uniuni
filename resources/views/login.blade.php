@extends('layouts.login')


@section('title','unibox')

@section('action','/next')

@section('button')
<input type="submit" class="square_btn" value="ログイン" style=" width:88px;" name="">
<span class="null"></span>
<a href="/new" class="square_btn">新規追加</a>
@endsection
