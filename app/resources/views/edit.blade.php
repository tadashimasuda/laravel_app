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
<h1 id="edit-h1">編集する</h1>
<form action="{{ route('tasks.update') }}" method="POST">
    @csrf
    <input type="hidden" name=task_id value="{{ $task->task_id }}">
    <ul id="edit-form">
        <li>
            <input type="text" name=text id="edit-text">
        </li>
        <li>
            <input type="submit" id="edit-btn">
        </li>
    </ul>
</form>
@endsection

