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
                <!-- ifでdone判定　btnの追加か否か -->
                <div id="mypage-btn">
                    <a href="/edit/{{$task->task_id}}" id="edit">編集</a>
                    <p>{{$task->task_id}}</p>
                    <form action="/task/achieve" method="POST">
                    @csrf
                    @method("PUT")
                    <input type="hidden" name="task_id" value="{{$task->task_id}}">
                    <input type="submit" value="完了">
                </form>
                </div>
            </li>
            @endforeach

        </ul>
        <span>＋</span>
    </div>
</div>
@endsection