@extends('layouts.parent')

@section('head')
@endsection

@section('header')
@endsection

@section('main')
<div id="mypage_top">
    <h1>My page</h1>
    <h2>達成度 : ◯％</h2>
</div>
<div id="mypage-contents">
    <div id="mypage-user">
        <img src="image/user_pic.jpg" alt="" class="user_pic">
        <p class="user_name">Tanaka</p>
    </div>
    <div id="mypage-content">
        <ul>
            @foreach($tasks as $task)
            <li>
                <img src="image/{{ $task->imgpath }}" alt="" class="content">
                <div id="mypage-btn">
                    <a href="#" id="edit">編集</a>
                    <a href="" id="done">達成</a>
                </div>
            </li>
            @endforeach

        </ul>
        <span>＋</span>
    </div>
</div>
@endsection