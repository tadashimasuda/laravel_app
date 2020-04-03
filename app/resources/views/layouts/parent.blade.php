<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>mokuhyo</title>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(function() {
            $('#menuIcon').click(function() {
                if ($('#list').css('display') == 'block') {
                    // 表示されている場合の処理
                    $('#list').css('display', 'none');
                } else {
                    // 非表示の場合の処理
                    $('#list').css('display', 'block');
                }
            });
            $('#btn-twitter').click(function() {
                if ($('#pop').css('display') == 'block') {
                    // 表示されている場合の処理
                    $('#pop').css('display', 'none');
                } else {
                    // 非表示の場合の処理
                    $('#pop').css('display', 'block');
                }
            })
        })
    </script>
    @yield('head')
</head>

<body>

    <header>
        <div id="inner">
            <a href="/top"><h1>mokuhyo</h1></a>
            <img src="image/icon.png" height="50px" width="50px" alt="" id="menuIcon">
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