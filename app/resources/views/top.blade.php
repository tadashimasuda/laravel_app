<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>toppage</title>
</head>
<body>
    <h1>hello world</h1>
    @foreach($tasks as $task)
        <p>{{ $task->content }}</p>
        <img src="/image/{{ $task->imgpath }}" alt="">
    @endforeach
</body>
</html>