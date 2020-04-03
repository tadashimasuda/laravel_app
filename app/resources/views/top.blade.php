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
    ごめん、あとでやる。
</div>
    <div id="top">
        <h2>目標管理サービス</h2>
        <h3>あなたの目標を簡単に管理しませんか？</h3>
    </div>
    <div id="top-form">
        <div id="btn">
            <a href="/login/twitter" id="btn-twitter">Twitterでログイン</a>
            <a href="{{ route('login') }}" id="btn-account">アカウントでログイン</a>
        </div>
        <a href="/register" id="new_account">アカウントの新規作成はこちら</a>
    </div>
    <div id="contents">
        <h2>みんなの目標</h2>
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