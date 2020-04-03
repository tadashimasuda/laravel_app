@extends('layouts.parent')
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
<div class="form-login">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <table>
            <tr>
                <th><label for="email">メールアドレス</label></th>
            </tr>
            <tr>
                <th>
                    <input type="text" id="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </th>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </tr>
            <tr>
                <th>
                    <label for="password">パスワード</label>
                </th>
            </tr>
            <tr>
                <th>
                    <input id="password" type="password" name="password" required autocomplete="current-password">
                </th>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </tr>
            <tr>
                <th>
                    <label for="form-check">次回から自動ログインする</label>
                </th>
                <th>
                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                </th>
            </tr>
            <tr>
                <th><button>ログインする</button></th>
            </tr>
            </table>
        </form>
</div>
@endsection