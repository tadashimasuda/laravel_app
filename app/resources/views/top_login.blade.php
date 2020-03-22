@extends('layouts.parent')

@section('head')
@endsection

@section('header')
@endsection

@section('main')
<div id="top_login_top">
    <h1>さあ、目標を掲げよう</h1>
    <button id="top_login_top_btn">作成する</button>
</div>
<div id="top_login_center-title">
    <h3>みんなの目標一覧</h3>
</div>
<div id="contents">
    <ul>
        @foreach($tasks as $task)
        <li>
            <div class="user">
                <img src="image/user_pic.jpg" alt="" class="user_pic">
                <p class="user_name">Tanaka</p>
            </div>
            <img src="image/{{ $task->imgpath }}" alt="" class="content">
        </li>
        @endforeach
    </ul>
</div>
@endsection