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
<h1 id="create-edit-h1">投稿する</h1>

<form action="{{ route('tasks.store') }}" method="POST">
    @csrf
    <ul id="create-edit-form">
        <li>
           <select name="categoryId" id="create-edit-select">
               <option value="1">学習</option>
               <option value="2">スポーツ</option>
               <option value="3">タスク処理</option>
           </select>
        </li>
        <li>
            <input type="text" name=text id="create-edit-text">
        </li>
        <li>
            <input type="submit" id="create-edit-btn">
        </li>
    </ul>
</form>
@endsection