@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login">
    <h2 class="login__ttl">ログイン</h2>
    <form class="login__form" action="/login" method="post">
        @csrf
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
        <button class="login__btn" type="submit">ログイン</button>
    </form>
    <div class="login__link">
        <p>アカウントをお持ちでない方はこちらから</p>
        <a class="link" href="http://localhost/register">会員登録</a>
    </div>
</div>
@endsection