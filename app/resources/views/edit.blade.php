@extends('layouts.parent')

@section('head')
@endsection

@section('header')
@endsection

@section('main')
<p>{{ $task->task_id }}</p>
<h1>編集する</h1>
<form action="/update/{{ $task->task_id }}" method="POST">
    @csrf
    <input type="text">
    <input type="submit">
</form>
@endsection