<!DOCTYPE html>
<html lang="ja">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>mokuhyo</title>
    @yield('head')
</head>

<body>

    <header>
        <h1>mokuhyo</h1>
        <div id="menu">
        </div>
    @yield('header')
    </header>

    <main>
        <div id="wrapper">
        @yield('main')
        </div>
       
    </main>
</body>

</html>