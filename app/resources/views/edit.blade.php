@extends('layouts.parent')

@section('head')
@endsection

@section('header')
@endsection

@section('main')
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

