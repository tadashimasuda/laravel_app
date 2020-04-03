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
<div id="mypage_top">
    <h1>My page</h1>
    <h2>達成度 : {{ $percent }}%</h2>
</div>
<div id="mypage-contents">
    @if(Auth::check())
    <!--ミドルウェアを通しているのでいらないかも-->
    <div id="mypage-user">
        <img src="image/user_pic.jpg" alt="" class="user_pic">
        <p>{{ $user->name }}</p>
    </div>
    @endif

    <div id="mypage-content">
        <ul>
            @foreach($tasks as $task)
            <li>
                <img src="{{ $task->imgpath }}" alt="" class="content">
                <!-- ifでdone判定　btnの追加か否か -->
                @if($task->done == 0)
                <div id="mypage-btn">
                    <form action="/edit/{{$task->task_id}}" id="edit" method="get">
                        <input type="submit" id="edit" value="編集">
                    </form>
                    <!-- <a href="/edit/{{$task->task_id}}" id="edit">編集</a> -->
                    <form action="/task/achieve" method="POST">
                        @csrf
                        @method("PUT")
                        <input type="hidden" name="task_id" value="{{$task->task_id}}">
                        <input type="submit" id="done" value="完了">
                    </form>
                </div>
                @endif
            </li>
            @endforeach

        </ul>
       
    </div>
    <div id="page_create"><a href="/task/create">+</a>
</div>
@endsection