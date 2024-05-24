@extends('layouts.header')

@section('css')
<link rel="stylesheet" href="{{ asset('css/stamp.css') }}">
@endsection

@section('content')
@if (Auth::check())
<h2>{{ Auth::user()->name }}さんお疲れ様です！</h2>
@endif
<form action="" method="POST">
    @csrf
    <div class="stamp__content">
        <div class="box1">
            <button class="start-time" type="submit" name="stamp" value="start-time">勤務開始</button>
            @if(session('message'))
            <div class="todo__alert--success">
                {{ session('message') }}
            </div>
            @endif
        </div>
        <div class="box2">
            <button class="finish-time" type="submit" name="stamp" value="finish-time">勤務終了</button>
        </div>
        <div class="box3">
            <button class="break-start" type="submit" name="stamp" value="break-start">休憩開始</button>
        </div>
        <div class="box4">
            <button class="break-finish" type="submit" name="stamp" value="break-finish">休憩終了</button>
        </div>
    </div>
</form>
@endsection