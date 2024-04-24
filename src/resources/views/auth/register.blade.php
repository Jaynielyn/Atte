@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="register">
    <h2 class="register__ttl">会員登録</h2>
    <form class="form" action="/register" method="post">
        @csrf
        <input class="name" type="text" name="name" placeholder="名前" value="{{ old('name') }}" />
        <div class="form__error">
            @error('name')
            {{ $message }}
            @enderror
        </div>
        <input class="email" type="email" name="email" placeholder="メールアドレス" value="{{ old('email') }}" />
        <div class="form__error">
            @error('email')
            {{ $message }}
            @enderror
        </div>
        <input class="pass" type="password" name="password" placeholder="パスワード" />
        <div class="form__error">
            @error('password')
            {{ $message }}
            @enderror
        </div>
        <input class="pass2" type="password" name="password_confirmation" placeholder="確認用パスワード" />
        <input class="btn" type="submit" name="submit" value="会員登録">
    </form>
    <div class="register__link">
        <p>アカウントのお持ちの方はこちらから</p>
        <a class="link" href="http://localhost/login">ログイン</a>
    </div>
</div>
@endsection