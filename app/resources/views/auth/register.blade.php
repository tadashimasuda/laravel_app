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
<div class="form">
    <form action="{{ route('register') }}" method="POST">
        <h1 id="formh1">新規登録</h1>
        @csrf
        <div id="register">
            <table>
                <tr>
                    <td class="form-row">
                        <!-- name -->
                        <label for="name" class="labelForm">
                            {{__('名前')}}
                        </label>
                    </td>
                    <td class="form-row">
                        <input type="text" id="name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <!-- email -->
                    <td class="form-row">
                        <label for="email" class="labelForm">
                            {{__('メールアドレス')}}
                        </label>
                    </td>
                    <td class="form-row">
                        <input type="text" id="email" name="email" value="{{ old('email') }}" required autocomplete="email">
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror

                    </td>
                </tr>
                <tr>
                    <td class="form-row">
                        <!-- password -->
                        <label for="password" class="labelForm">
                            {{__('パスワード')}}
                        </label>
                    </td>
                    <td class="form-row">
                        <input type="text" id="password" name="password" value="{{ old('password') }}" required autocomplete="password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </td>
                </tr>
                <tr>
                    <td class="form-row">
                        <!-- password cinfirm -->
                        <label for="password-confirm" class="passConfirm">{{ __('パスワード(再入力)') }}</label>
                    </td>
                    <td class="form-row">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </td>
                </tr>
                <tr>
                    <button type="submit" class="btnForm">{{('登録')}}</button>
                </tr>
            </table>
        </div>
    </form>
</div>

@endsection