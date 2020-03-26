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
            @foreach($tasks as $task)
            <li>
                <div class="user">
                    <img src="image/user_pic.jpg" alt="" class="user_pic">
                    <p class="user_name">Tanaka</p>
                </div>
                <img src="{{ $task->imgpath }}" alt="" class="content">
            </li>
            @endforeach
        </ul>
    </div>
@endsection