@extends('layouts.parent')

@section('head')
@endsection

@section('header')
@endsection

@section('main')
<div id="list">
    <ul>
        <li><a href="/top">トップページへ</a></li>
        <li><a href="/mypage">Mypageへ</a></li>
        <li><a href="/logout">ログアウト</a></li>
    </ul>
</div>
<div id="pop">
    カミングソーン
</div>
<div id="top_login_top">
    <h1>目標を掲げよう</h1>
    <form action="task/create" method="get">
        <button id="top_login_top_btn">作成する</button>
    </form>
</div>
<div id="top_login_center-title">
    <h3>みんなの目標一覧</h3>
</div>
<div id="contents">
    <ul>
        @foreach($tasks as $task)
        <li>
            @if($task->user !=null)
            <div class="user">
                <img src="image/user_pic.jpg" alt="" class="user_pic">
                <p class="user_name">{{ $task->user->name}}</p>
            </div>
            @endif
            <!-- imgpathカラムを作ってから -->
            <img src="{{ $task->imgpath }}" alt="" class="content">
        </li>
        @endforeach
    </ul>

</div>

@endsection