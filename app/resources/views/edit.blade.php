@extends('layouts.parent')

@section('head')
@endsection

@section('header')
@endsection

@section('main')
<h1 id="edit-h1">編集する</h1>
<form action="/update/{{ $task->task_id }}" method="POST">
    @csrf
    <ul id="edit-form">
        <li>
            <input type="text" id="edit-text">
        </li>
        <li>
            <input type="submit" id="edit-btn">
        </li>
    </ul>
</form>
@endsection

