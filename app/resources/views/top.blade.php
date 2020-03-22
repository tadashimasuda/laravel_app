@extends('layouts.parent')

@section('head')
@endsection

@section('header')
@endsection

@section('main')
    <div id="top">
        <h2>目標管理サービス</h2>
        <h3>あなたの目標を簡単に管理しませんか？</h3>
    </div>
    <div id="form">
        <div class="btn twitter">
            <button id="btn-twitter">Twitterでログイン</button>
        </div>
        <div class="btn account">
            <button id="btn-account">アカウントでログイン</button>
        </div>
        <a href="#" id="new_account">アカウントの新規作成はこちら</a>
    </div>
    <div id="contents">
        <h2>みんなの目標</h2>
        <ul>
            <li>
                <div class="user">
                    <img src="image/user_pic.jpg" alt="" class="user_pic">
                    <p class="user_name">Tanaka</p>
                </div>
                <img src="image/sample.jpg" alt="" class="content">
            </li>
            <li>
                <div class="user">
                    <img src="image/user_pic.jpg" alt="" class="user_pic">
                    <p class="user_name">Suzuki</p>
                </div>
                <img src="image/sample.jpg" alt="" class="content">
            </li>
        </ul>
    </div>
@endsection

<!-- <h1>hello world</h1>
    @foreach($tasks as $task)
        <p>{{ $task->content }}</p>
        <img src="/image/{{ $task->imgpath }}" alt="">
    @endforeach -->